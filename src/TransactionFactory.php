<?php
namespace woojos\kontomierz;

/**
 * Class TransactionFactory
 * @package woojos\kontomierz
 */
class TransactionFactory
{
    /**
     * @param array $transaction
     * @return Transaction
     */
    public static function createFromJSONResponse(array $transaction)
    {
        return new Transaction(
            $transaction['id'],
            $transaction['user_account_id'],
            $transaction['category_id'],
            $transaction['category_name'],
            $transaction['currency_amount'],
            $transaction['currency_name'],
            \DateTime::createFromFormat('Y-m-d', $transaction['transaction_on']),
            $transaction['title'],
            $transaction['tag_string'],
            isset($transaction['plain_party_iban']) ? $transaction['plain_party_iban']:null,
            $transaction['description'],
            $transaction['kind']
        );
    }

}