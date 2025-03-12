<?php

namespace Modules\People\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\People\Entities\Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->companyEmail(),
            'customer_phone' => $this->faker->phoneNumber(),
            'city' => $this->faker->randomElements(['Nairobi', 'Mombasa', 'Nakuru', 'Thika']),
            'country' => $this->faker->country(),
            'address' => $this->faker->streetAddress(),
            'customer_website'    => $this->faker->domainName(),
            'business_pin'        => $this->faker->regexify('[A-Z]{5}[0-9]{8}'), //e.g. DRSQX201
            'business_vat'        => $this->faker->regexify('[A-V]{5}[0-9]{8}'),
            'business_permit_no'  => $this->faker->regexify('[A-Z]{5}[0-9]{8}'),
            'business_years'      => $this->faker->year(),
            'business_date_registration'  => $this->faker->date(),
            'business_reg_cert_no'        => $this->faker->regexify('[A-Z]{5}[0-9]{8}'),
            'business_type' => $this->faker->randomElements(['corporate', 'individual', 'e_commerce']),
            'postal_address' => $this->faker->secondaryAddress(),
            'postal_zip' => $this->faker->postcode(),
            'postal_town' => $this->faker->city(),
            'postal_city' => $this->faker->randomElements(['Nairobi', 'Mombasa', 'Nakuru', 'Thika']),
            'telephone_1' => $this->faker->numerify('+254-########'),
            'telephone_2' => $this->faker->numerify('+254-########'),
            'billing_email' => $this->faker->freeEmail(),
            'payment_term' => $this->faker->randomElements([
                "Net 10 : Payment expected within 15 days after the invoice date",
                'Net 15 : Payment expected within 15 days after the invoice date',
                "Net 60 : Payment expected within 60 days after the invoice date",
                "Net 90 : Payment expected within 90 days after the invoice date"
            ]),
            'credit_term' => $this->faker->randomElements([
                "Cash on Delivery (CoD): Here the payment is due at the same time as a product",
                "Payment in Advance: Seller demands the buyer to pay the consideration, either",
                "Pre-paid: This is exactly opposite of cash o delivery(COD). Here, the buyer",
                "Bill of Exchange: Arrangement to pay at a later date, usually with bank support"
            ]),
            'delivery_mode' => $this->faker->randomElements(['COURIER NEXT DAY', 'COURIER SAME DAY', 'COURIER 48 HOURS', 'SELF COLLECTION']),
        ];
    }
}
