<?php
namespace App\Http\Service;

class MomoService
{
    private $partnerCode =  'MOMON9PQ20211006';
    private $accessKey = 'i4v90CNRu2BHmrKB';
    private $secretKey = 'IubYwLYxCj9uCiAnaY3K8H112LJb01Jk';
    private $endPoint = 'https://test-payment.momo.vn/gw_payment/transactionProcessor';

    public function payment($data) {
        $orderId = $data["orderId"]; // Mã đơn hàng
        $orderInfo = $data["orderInfo"];
        $amount = $data["amount"];
        $ipnUrl = $data["ipnUrl"];
        $redirectUrl = $data["redirectUrl"];
        $extraData = $data["extraData"];

        $requestId = time() . "";
        $requestType = "captureMoMoWallet";
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $this->accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" .
            $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $this->partnerCode .
            "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;

        $signature = hash_hmac("sha256", $rawHash, $this->secretKey);
        $data = array('partnerCode' => $this->partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature);

        $ch = curl_init($this->endPoint);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return json_decode($result, true);
    }
}
