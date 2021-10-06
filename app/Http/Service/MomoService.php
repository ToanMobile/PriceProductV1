<?php
namespace App\Http\Service;

class MomoService
{
    private $partnerCode;
    private $accessKey;
    private $secretKey;
    private $endPoint;
    private $returnUrl;
    private $notifyUrl;

    function __construct()
    {
        $this->accessKey = 'i4v90CNRu2BHmrKB';
        $this->endPoint = 'https://test-payment.momo.vn/gw_payment/transactionProcessor';
        $this->partnerCode =  'MOMON9PQ20211006';
        $this->secretKey = 'IubYwLYxCj9uCiAnaY3K8H112LJb01Jk';
        $this->returnUrl = "http://thietkeweb365.cf/payment?package=2&quantity=5&platform=web";
        $this->notifyUrl = "https://momo.vn";
    }

    public function payment($data) {
        $orderId = $data["orderId"]; // Mã đơn hàng
        $orderInfo = $data["orderInfo"];
        $amount = $data["amount"];
        //$ipnUrl = $data["ipnUrl"];
        //$redirectUrl = $data["redirectUrl"];
        $extraData = $data["extraData"];

        $requestId = time() . "";
        $requestType = "captureMoMoWallet";
        //before sign HMAC SHA256 signature
        $rawHash = "partnerCode=" . $this->partnerCode . "&accessKey=" . $this->accessKey . "&requestId=" . $requestId .
                    "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
                    "&returnUrl=" . $this->returnUrl . "&notifyUrl=" . $this->notifyUrl . "&extraData=" . $extraData;

        $signature = hash_hmac("sha256", $rawHash, $this->secretKey);
        $data = array(
            'partnerCode' => $this->partnerCode,
            'accessKey' => $this->accessKey,
            'returnUrl' => $this->returnUrl,
            'notifyUrl' => $this->notifyUrl,
            'partnerName' => "Test",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );

        $json_data = json_encode($data);

        $ch = curl_init($this->endPoint);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($json_data))
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
