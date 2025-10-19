<?php
// test_hash_generator.php
$FAWATERAK_VENDOR_KEY = "c807d980efffb9f3a56a028eaa429cfd00b95e4560f488aeb7";

function generateTestHash($data, $type = 'paid') {
    global $FAWATERAK_VENDOR_KEY;
    
    if ($type === 'paid') {
        $queryParam = "InvoiceId=" . ($data['invoice_id'] ?? '') . 
                     "&InvoiceKey=" . ($data['invoice_key'] ?? '') . 
                     "&PaymentMethod=" . ($data['payment_method'] ?? '');
    } else {
        $queryParam = "referenceId=" . ($data['referenceId'] ?? '') . 
                     "&PaymentMethod=" . ($data['paymentMethod'] ?? '');
    }
    
    $hash = hash_hmac('sha256', $queryParam, $FAWATERAK_VENDOR_KEY, false);
    return $hash;
}

// بيانات اختبار للدفع الناجح
$testDataPaid = [
    'invoice_id' => 'INV-TEST-001',
    'invoice_key' => 'key_test_123',
    'payment_method' => 'fawry',
    'referenceNumber' => 'REF-TEST-001',
    'pay_load' => json_encode([
        'user_id' => '1',
        'subscription_type' => 'monthly',
        'product' => 'genius_ai_subscription'
    ])
];

// بيانات اختبار للمعاملة المنتهية
$testDataExpired = [
    'referenceId' => 'REF-TEST-002',
    'transactionKey' => 'txn_test_123',
    'paymentMethod' => 'aman'
];

$hashPaid = generateTestHash($testDataPaid, 'paid');
$hashExpired = generateTestHash($testDataExpired, 'expired');

echo "=== بيانات اختبار Webhook ===\n\n";

echo "1. للدفع الناجح:\n";
echo "Hash: " . $hashPaid . "\n";
echo "JSON Data:\n";
$testDataPaid['hashKey'] = $hashPaid;
echo json_encode($testDataPaid, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo "\n\n2. للمعاملة المنتهية:\n";
echo "Hash: " . $hashExpired . "\n";
echo "JSON Data:\n";
$testDataExpired['status'] = 'EXPIRED';
$testDataExpired['hashKey'] = $hashExpired;
echo json_encode($testDataExpired, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>