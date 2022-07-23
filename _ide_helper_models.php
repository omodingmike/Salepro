<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Account
 *
 * @property int $id
 * @property string $account_no
 * @property string $name
 * @property float|null $initial_balance
 * @property float $total_balance
 * @property string|null $note
 * @property int|null $is_default
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereAccountNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereInitialBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereTotalBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUpdatedAt($value)
 */
	class Account extends \Eloquent {}
}

namespace App{
/**
 * App\Adjustment
 *
 * @property int $id
 * @property string $reference_no
 * @property int $warehouse_id
 * @property string|null $document
 * @property float $total_qty
 * @property int $item
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereWarehouseId($value)
 */
	class Adjustment extends \Eloquent {}
}

namespace App{
/**
 * App\Attendance
 *
 * @property int $id
 * @property string $date
 * @property int $employee_id
 * @property int $user_id
 * @property string $checkin
 * @property string $checkout
 * @property int $status
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCheckin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCheckout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUserId($value)
 */
	class Attendance extends \Eloquent {}
}

namespace App{
/**
 * App\Biller
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string $company_name
 * @property string|null $vat_number
 * @property string $email
 * @property string $phone_number
 * @property string $address
 * @property string $city
 * @property string|null $state
 * @property string|null $postal_code
 * @property string|null $country
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Sale[] $sale
 * @property-read int|null $sale_count
 * @method static \Illuminate\Database\Eloquent\Builder|Biller newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Biller newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Biller query()
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biller whereVatNumber($value)
 */
	class Biller extends \Eloquent {}
}

namespace App{
/**
 * App\Brand
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App{
/**
 * App\CashRegister
 *
 * @property int $id
 * @property float $cash_in_hand
 * @property int $user_id
 * @property int $warehouse_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User|null $user
 * @property-read \App\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister query()
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereCashInHand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashRegister whereWarehouseId($value)
 */
	class CashRegister extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property int|null $parent_id
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Coupon
 *
 * @property int $id
 * @property string $code
 * @property string $type
 * @property float $amount
 * @property float|null $minimum_amount
 * @property int $quantity
 * @property int $used
 * @property string $expired_date
 * @property int $user_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMinimumAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUserId($value)
 */
	class Coupon extends \Eloquent {}
}

namespace App{
/**
 * App\Currency
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property float $exchange_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace App{
/**
 * App\Customer
 *
 * @property int $id
 * @property int $customer_group_id
 * @property int|null $user_id
 * @property string $name
 * @property string|null $company_name
 * @property string|null $email
 * @property string $phone_number
 * @property string|null $tax_no
 * @property string $address
 * @property string $city
 * @property string|null $state
 * @property string|null $postal_code
 * @property string|null $country
 * @property float|null $points
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float|null $deposit
 * @property float|null $expense
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCustomerGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereExpense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTaxNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUserId($value)
 */
	class Customer extends \Eloquent {}
}

namespace App{
/**
 * App\CustomerGroup
 *
 * @property int $id
 * @property string $name
 * @property string $percentage
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerGroup whereUpdatedAt($value)
 */
	class CustomerGroup extends \Eloquent {}
}

namespace App{
/**
 * App\Delivery
 *
 * @property int $id
 * @property string $reference_no
 * @property int $sale_id
 * @property int|null $user_id
 * @property string $address
 * @property string|null $delivered_by
 * @property string|null $recieved_by
 * @property string|null $file
 * @property string|null $note
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Sale|null $sale
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereDeliveredBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereRecievedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUserId($value)
 */
	class Delivery extends \Eloquent {}
}

namespace App{
/**
 * App\Department
 *
 * @property int $id
 * @property string $name
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App{
/**
 * App\Deposit
 *
 * @property int $id
 * @property float $amount
 * @property int $customer_id
 * @property int $user_id
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deposit whereUserId($value)
 */
	class Deposit extends \Eloquent {}
}

namespace App{
/**
 * App\Employee
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property int $department_id
 * @property int|null $user_id
 * @property string|null $image
 * @property string|null $address
 * @property string|null $city
 * @property string|null $country
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Payroll[] $payroll
 * @property-read int|null $payroll_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUserId($value)
 */
	class Employee extends \Eloquent {}
}

namespace App{
/**
 * App\Expense
 *
 * @property int $id
 * @property string $reference_no
 * @property int $expense_category_id
 * @property int $warehouse_id
 * @property int $account_id
 * @property int $user_id
 * @property int|null $cash_register_id
 * @property float $amount
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\ExpenseCategory|null $expenseCategory
 * @property-read \App\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCashRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereWarehouseId($value)
 */
	class Expense extends \Eloquent {}
}

namespace App{
/**
 * App\ExpenseCategory
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Expense[] $expense
 * @property-read int|null $expense_count
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereUpdatedAt($value)
 */
	class ExpenseCategory extends \Eloquent {}
}

namespace App{
/**
 * App\GeneralSetting
 *
 * @property int $id
 * @property string $site_title
 * @property string|null $site_logo
 * @property int|null $is_rtl
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $currency
 * @property string $staff_access
 * @property string $date_format
 * @property string|null $developed_by
 * @property string|null $invoice_format
 * @property int|null $state
 * @property string $theme
 * @property string $currency_position
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereCurrencyPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereDateFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereDevelopedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereInvoiceFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereIsRtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereSiteLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereSiteTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereStaffAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereUpdatedAt($value)
 */
	class GeneralSetting extends \Eloquent {}
}

namespace App{
/**
 * App\GiftCard
 *
 * @property int $id
 * @property string $card_no
 * @property float $amount
 * @property float $expense
 * @property int|null $customer_id
 * @property int|null $user_id
 * @property string|null $expired_date
 * @property int $created_by
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereCardNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereExpense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereUserId($value)
 */
	class GiftCard extends \Eloquent {}
}

namespace App{
/**
 * App\GiftCardRecharge
 *
 * @property int $id
 * @property int $gift_card_id
 * @property float $amount
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge whereGiftCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardRecharge whereUserId($value)
 */
	class GiftCardRecharge extends \Eloquent {}
}

namespace App{
/**
 * App\Holiday
 *
 * @property int $id
 * @property int $user_id
 * @property string $from_date
 * @property string $to_date
 * @property string|null $note
 * @property int $is_approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday query()
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday whereFromDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday whereToDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Holiday whereUserId($value)
 */
	class Holiday extends \Eloquent {}
}

namespace App{
/**
 * App\HrmSetting
 *
 * @property int $id
 * @property string $checkin
 * @property string $checkout
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HrmSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HrmSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HrmSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|HrmSetting whereCheckin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HrmSetting whereCheckout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HrmSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HrmSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HrmSetting whereUpdatedAt($value)
 */
	class HrmSetting extends \Eloquent {}
}

namespace App{
/**
 * App\Language
 *
 * @property int $id
 * @property string $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App{
/**
 * App\MoneyTransfer
 *
 * @property int $id
 * @property string $reference_no
 * @property int $from_account_id
 * @property int $to_account_id
 * @property float $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account|null $fromAccount
 * @property-read \App\Account|null $toAccount
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer query()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer whereFromAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer whereToAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyTransfer whereUpdatedAt($value)
 */
	class MoneyTransfer extends \Eloquent {}
}

namespace App{
/**
 * App\Payment
 *
 * @property int $id
 * @property int|null $purchase_id
 * @property int|null $sale_id
 * @property int|null $cash_register_id
 * @property int $account_id
 * @property string $payment_reference
 * @property int $user_id
 * @property float $amount
 * @property float|null $used_points
 * @property float $change
 * @property string $paying_method
 * @property string|null $payment_note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCashRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereChange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePayingMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUsedPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 */
	class Payment extends \Eloquent {}
}

namespace App{
/**
 * App\PaymentWithCheque
 *
 * @property int $id
 * @property int $payment_id
 * @property string $cheque_no
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCheque newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCheque newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCheque query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCheque whereChequeNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCheque whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCheque whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCheque wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCheque whereUpdatedAt($value)
 */
	class PaymentWithCheque extends \Eloquent {}
}

namespace App{
/**
 * App\PaymentWithCreditCard
 *
 * @property int $id
 * @property int $payment_id
 * @property int|null $customer_id
 * @property string|null $customer_stripe_id
 * @property string $charge_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard whereChargeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard whereCustomerStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithCreditCard whereUpdatedAt($value)
 */
	class PaymentWithCreditCard extends \Eloquent {}
}

namespace App{
/**
 * App\PaymentWithGiftCard
 *
 * @property int $id
 * @property int $payment_id
 * @property int $gift_card_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithGiftCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithGiftCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithGiftCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithGiftCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithGiftCard whereGiftCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithGiftCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithGiftCard wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithGiftCard whereUpdatedAt($value)
 */
	class PaymentWithGiftCard extends \Eloquent {}
}

namespace App{
/**
 * App\PaymentWithPaypal
 *
 * @property int $id
 * @property int $payment_id
 * @property string $transaction_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithPaypal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithPaypal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithPaypal query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithPaypal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithPaypal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithPaypal wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithPaypal whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentWithPaypal whereUpdatedAt($value)
 */
	class PaymentWithPaypal extends \Eloquent {}
}

namespace App{
/**
 * App\Payroll
 *
 * @property int $id
 * @property string $reference_no
 * @property int $employee_id
 * @property int $account_id
 * @property int $user_id
 * @property float $amount
 * @property string $paying_method
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Employee|null $employee
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll wherePayingMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereUserId($value)
 */
	class Payroll extends \Eloquent {}
}

namespace App{
/**
 * App\PosSetting
 *
 * @property int $id
 * @property int $customer_id
 * @property int $warehouse_id
 * @property int $biller_id
 * @property int $product_number
 * @property int $keybord_active
 * @property string|null $stripe_public_key
 * @property string $stripe_secret_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereBillerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereKeybordActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereProductNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereStripePublicKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereStripeSecretKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PosSetting whereWarehouseId($value)
 */
	class PosSetting extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $type
 * @property string $barcode_symbology
 * @property int|null $brand_id
 * @property int $category_id
 * @property int $unit_id
 * @property int $purchase_unit_id
 * @property int $sale_unit_id
 * @property string $cost
 * @property string $price
 * @property float|null $qty
 * @property float|null $alert_quantity
 * @property int|null $promotion
 * @property string|null $promotion_price
 * @property string|null $starting_date
 * @property string|null $last_date
 * @property int|null $tax_id
 * @property int|null $tax_method
 * @property string|null $image
 * @property string|null $file
 * @property int|null $is_variant
 * @property int|null $is_batch
 * @property int|null $is_diffPrice
 * @property int|null $is_imei
 * @property int|null $featured
 * @property string|null $product_list
 * @property string|null $variant_list
 * @property string|null $qty_list
 * @property string|null $price_list
 * @property string|null $product_details
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Brand|null $brand
 * @property-read \App\Category|null $category
 * @property-read \App\Unit|null $unit
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Variant[] $variant
 * @property-read int|null $variant_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product activeFeatured()
 * @method static \Illuminate\Database\Eloquent\Builder|Product activeStandard()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAlertQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBarcodeSymbology($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsDiffPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsImei($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsVariant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLastDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePriceList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePromotion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePromotionPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePurchaseUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQtyList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSaleUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStartingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTaxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTaxMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVariantList($value)
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\ProductAdjustment
 *
 * @property int $id
 * @property int $adjustment_id
 * @property int $product_id
 * @property int|null $variant_id
 * @property float $qty
 * @property string $action
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment whereAdjustmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdjustment whereVariantId($value)
 */
	class ProductAdjustment extends \Eloquent {}
}

namespace App{
/**
 * App\ProductBatch
 *
 * @property int $id
 * @property int $product_id
 * @property string $batch_no
 * @property string $expired_date
 * @property float $qty
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch whereBatchNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBatch whereUpdatedAt($value)
 */
	class ProductBatch extends \Eloquent {}
}

namespace App{
/**
 * App\ProductPurchase
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $product_id
 * @property int|null $product_batch_id
 * @property int|null $variant_id
 * @property string|null $imei_number
 * @property float $qty
 * @property float $recieved
 * @property int $purchase_unit_id
 * @property float $net_unit_cost
 * @property float $discount
 * @property float $tax_rate
 * @property float $tax
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereImeiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereNetUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereProductBatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase wherePurchaseUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereRecieved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPurchase whereVariantId($value)
 */
	class ProductPurchase extends \Eloquent {}
}

namespace App{
/**
 * App\ProductQuotation
 *
 * @property int $id
 * @property int $quotation_id
 * @property int $product_id
 * @property int|null $product_batch_id
 * @property int|null $variant_id
 * @property float $qty
 * @property int $sale_unit_id
 * @property float $net_unit_price
 * @property float $discount
 * @property float $tax_rate
 * @property float $tax
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereNetUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereProductBatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereQuotationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereSaleUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductQuotation whereVariantId($value)
 */
	class ProductQuotation extends \Eloquent {}
}

namespace App{
/**
 * App\ProductReturn
 *
 * @property int $id
 * @property int $return_id
 * @property int $product_id
 * @property int|null $product_batch_id
 * @property int|null $variant_id
 * @property string|null $imei_number
 * @property float $qty
 * @property int $sale_unit_id
 * @property float $net_unit_price
 * @property float $discount
 * @property float $tax_rate
 * @property float $tax
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereImeiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereNetUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereProductBatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereReturnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereSaleUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReturn whereVariantId($value)
 */
	class ProductReturn extends \Eloquent {}
}

namespace App{
/**
 * App\ProductTransfer
 *
 * @property int $id
 * @property int $transfer_id
 * @property int $product_id
 * @property int|null $product_batch_id
 * @property int|null $variant_id
 * @property string|null $imei_number
 * @property float $qty
 * @property int $purchase_unit_id
 * @property float $net_unit_cost
 * @property float $tax_rate
 * @property float $tax
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereImeiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereNetUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereProductBatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer wherePurchaseUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereTransferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTransfer whereVariantId($value)
 */
	class ProductTransfer extends \Eloquent {}
}

namespace App{
/**
 * App\ProductVariant
 *
 * @property int $id
 * @property int $product_id
 * @property int $variant_id
 * @property int $position
 * @property string $item_code
 * @property float|null $additional_price
 * @property float $qty
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant findExactProduct($product_id, $variant_id)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant findExactProductWithCode($product_id, $item_code)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant whereAdditionalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant whereItemCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariant whereVariantId($value)
 */
	class ProductVariant extends \Eloquent {}
}

namespace App{
/**
 * App\Product_Sale
 *
 * @property int $id
 * @property int $sale_id
 * @property int $product_id
 * @property int|null $product_batch_id
 * @property int|null $variant_id
 * @property string|null $imei_number
 * @property float $qty
 * @property int $sale_unit_id
 * @property float $net_unit_price
 * @property float $discount
 * @property float $tax_rate
 * @property float $tax
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereImeiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereNetUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereProductBatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereSaleUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Sale whereVariantId($value)
 */
	class Product_Sale extends \Eloquent {}
}

namespace App{
/**
 * App\Product_Supplier
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Supplier query()
 */
	class Product_Supplier extends \Eloquent {}
}

namespace App{
/**
 * App\Product_Warehouse
 *
 * @property int $id
 * @property string $product_id
 * @property int|null $product_batch_id
 * @property int|null $variant_id
 * @property string|null $imei_number
 * @property int $warehouse_id
 * @property float $qty
 * @property float|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse findProductWithVariant($product_id, $variant_id, $warehouse_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse findProductWithoutVariant($product_id, $warehouse_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereImeiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereProductBatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereVariantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_Warehouse whereWarehouseId($value)
 */
	class Product_Warehouse extends \Eloquent {}
}

namespace App{
/**
 * App\Purchase
 *
 * @property int $id
 * @property string $reference_no
 * @property int $user_id
 * @property int $warehouse_id
 * @property int|null $supplier_id
 * @property int $item
 * @property int $total_qty
 * @property float $total_discount
 * @property float $total_tax
 * @property float $total_cost
 * @property float|null $order_tax_rate
 * @property float|null $order_tax
 * @property float|null $order_discount
 * @property float|null $shipping_cost
 * @property float $grand_total
 * @property float $paid_amount
 * @property int $status
 * @property int $payment_status
 * @property string|null $document
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Supplier|null $supplier
 * @property-read \App\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereOrderDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereOrderTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereOrderTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereWarehouseId($value)
 */
	class Purchase extends \Eloquent {}
}

namespace App{
/**
 * App\PurchaseProductReturn
 *
 * @property int $id
 * @property int $return_id
 * @property int $product_id
 * @property int|null $product_batch_id
 * @property int|null $variant_id
 * @property string|null $imei_number
 * @property float $qty
 * @property int $purchase_unit_id
 * @property float $net_unit_cost
 * @property float $discount
 * @property float $tax_rate
 * @property float $tax
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereImeiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereNetUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereProductBatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn wherePurchaseUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereReturnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProductReturn whereVariantId($value)
 */
	class PurchaseProductReturn extends \Eloquent {}
}

namespace App{
/**
 * App\Quotation
 *
 * @property int $id
 * @property string $reference_no
 * @property int $user_id
 * @property int $biller_id
 * @property int|null $supplier_id
 * @property int $customer_id
 * @property int $warehouse_id
 * @property int $item
 * @property float $total_qty
 * @property float $total_discount
 * @property float $total_tax
 * @property float $total_price
 * @property float|null $order_tax_rate
 * @property float|null $order_tax
 * @property float|null $order_discount
 * @property float|null $shipping_cost
 * @property float $grand_total
 * @property int $quotation_status
 * @property string|null $document
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Biller|null $biller
 * @property-read \App\Customer|null $customer
 * @property-read \App\Supplier|null $supplier
 * @property-read \App\User|null $user
 * @property-read \App\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereBillerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereOrderDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereOrderTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereOrderTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereQuotationStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTotalDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereWarehouseId($value)
 */
	class Quotation extends \Eloquent {}
}

namespace App{
/**
 * App\ReturnPurchase
 *
 * @property int $id
 * @property string $reference_no
 * @property int|null $supplier_id
 * @property int $warehouse_id
 * @property int $user_id
 * @property int $account_id
 * @property int $item
 * @property float $total_qty
 * @property float $total_discount
 * @property float $total_tax
 * @property float $total_cost
 * @property float|null $order_tax_rate
 * @property float|null $order_tax
 * @property float $grand_total
 * @property string|null $document
 * @property string|null $return_note
 * @property string|null $staff_note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Supplier|null $supplier
 * @property-read \App\User|null $user
 * @property-read \App\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereOrderTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereOrderTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereReturnNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereStaffNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereTotalCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereTotalDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnPurchase whereWarehouseId($value)
 */
	class ReturnPurchase extends \Eloquent {}
}

namespace App{
/**
 * App\Returns
 *
 * @property int $id
 * @property string $reference_no
 * @property int $user_id
 * @property int|null $cash_register_id
 * @property int $customer_id
 * @property int $warehouse_id
 * @property int $biller_id
 * @property int $account_id
 * @property int $item
 * @property float $total_qty
 * @property float $total_discount
 * @property float $total_tax
 * @property float $total_price
 * @property float|null $order_tax_rate
 * @property float|null $order_tax
 * @property float $grand_total
 * @property string|null $document
 * @property string|null $return_note
 * @property string|null $staff_note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Biller|null $biller
 * @property-read \App\Customer|null $customer
 * @property-read \App\User|null $user
 * @property-read \App\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Returns newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Returns newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Returns query()
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereBillerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereCashRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereOrderTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereOrderTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereReturnNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereStaffNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereTotalDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Returns whereWarehouseId($value)
 */
	class Returns extends \Eloquent {}
}

namespace App{
/**
 * App\RewardPointSetting
 *
 * @property int $id
 * @property float $per_point_amount
 * @property float $minimum_amount
 * @property int|null $duration
 * @property string|null $type
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting whereMinimumAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting wherePerPointAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RewardPointSetting whereUpdatedAt($value)
 */
	class RewardPointSetting extends \Eloquent {}
}

namespace App{
/**
 * App\Roles
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $guard_name
 * @method static \Illuminate\Database\Eloquent\Builder|Roles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles query()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereUpdatedAt($value)
 */
	class Roles extends \Eloquent {}
}

namespace App{
/**
 * App\Sale
 *
 * @property int $id
 * @property string $reference_no
 * @property int $user_id
 * @property int|null $cash_register_id
 * @property int $customer_id
 * @property int $warehouse_id
 * @property int $biller_id
 * @property int $item
 * @property float $total_qty
 * @property float $total_discount
 * @property float $total_tax
 * @property float $total_price
 * @property float $grand_total
 * @property float|null $order_tax_rate
 * @property float|null $order_tax
 * @property float|null $order_discount
 * @property int|null $coupon_id
 * @property float|null $coupon_discount
 * @property float|null $shipping_cost
 * @property int $sale_status
 * @property int $payment_status
 * @property string|null $document
 * @property float|null $paid_amount
 * @property string|null $sale_note
 * @property string|null $staff_note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Biller|null $biller
 * @property-read \App\Customer|null $customer
 * @property-read \App\User|null $user
 * @property-read \App\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereBillerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCashRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereOrderDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereOrderTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereOrderTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereSaleNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereSaleStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereStaffNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTotalDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereWarehouseId($value)
 */
	class Sale extends \Eloquent {}
}

namespace App{
/**
 * App\StockCount
 *
 * @property int $id
 * @property string $reference_no
 * @property int $warehouse_id
 * @property string|null $category_id
 * @property string|null $brand_id
 * @property int $user_id
 * @property string $type
 * @property string|null $initial_file
 * @property string|null $final_file
 * @property string|null $note
 * @property int $is_adjusted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount query()
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereFinalFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereInitialFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereIsAdjusted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereWarehouseId($value)
 */
	class StockCount extends \Eloquent {}
}

namespace App{
/**
 * App\Supplier
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string $company_name
 * @property string|null $vat_number
 * @property string $email
 * @property string $phone_number
 * @property string $address
 * @property string $city
 * @property string|null $state
 * @property string|null $postal_code
 * @property string|null $country
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereVatNumber($value)
 */
	class Supplier extends \Eloquent {}
}

namespace App{
/**
 * App\Tax
 *
 * @property int $id
 * @property string $name
 * @property float $rate
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereUpdatedAt($value)
 */
	class Tax extends \Eloquent {}
}

namespace App{
/**
 * App\Transfer
 *
 * @property int $id
 * @property string $reference_no
 * @property int $user_id
 * @property int $status
 * @property int $from_warehouse_id
 * @property int $to_warehouse_id
 * @property int $item
 * @property float $total_qty
 * @property float $total_tax
 * @property float $total_cost
 * @property float|null $shipping_cost
 * @property float $grand_total
 * @property string|null $document
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Warehouse|null $fromWarehouse
 * @property-read \App\Warehouse|null $toWarehouse
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereFromWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereToWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTotalCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereUserId($value)
 */
	class Transfer extends \Eloquent {}
}

namespace App{
/**
 * App\Unit
 *
 * @property int $id
 * @property string $unit_code
 * @property string $unit_name
 * @property int|null $base_unit
 * @property string|null $operator
 * @property float|null $operation_value
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereBaseUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereOperationValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereOperator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUnitName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $phone
 * @property string|null $company_name
 * @property int $role_id
 * @property int|null $biller_id
 * @property int|null $warehouse_id
 * @property int $is_active
 * @property int $is_deleted
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Holiday[] $holiday
 * @property-read int|null $holiday_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \App\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBillerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWarehouseId($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Variant
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Variant[] $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|Variant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Variant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variant whereUpdatedAt($value)
 */
	class Variant extends \Eloquent {}
}

namespace App{
/**
 * App\Warehouse
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property string|null $email
 * @property string $address
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse query()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereUpdatedAt($value)
 */
	class Warehouse extends \Eloquent {}
}

