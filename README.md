# Billie Pay After Delivery
## Introduction
The Pay After Delivery product enables merchants to accept invoice payments from business customers (hereafter referred to as debtors). Billie takes over the reconciliation of payments, dunning processes and credit risk.

Based upon the contractual agreement with Billie, debtors have either 14, 30, 45, 60, 90 or 120 days to pay their invoices. However, the merchant receives funds from Billie immediately when the product is shipped, or the service obligation is fulfilled.

If debtors do not settle their outstanding invoices on time, Billie also sends reminders to these debtors on the merchant’s behalf. Pay After Delivery is a white label solution so these letters are sent by Billie in the merchant’s own branding, and the relationship between Billie and the merchant is not disclosed. If a debtor declares bankruptcy, Billie fully covers this default for the merchant.

## Usage of virtual IBANs 
A virtual IBAN is generated for each new invoice. These IBANs are unique to a debtor and must be the only payment details displayed on the invoice which the debtor receives. Virtual IBANs are made available to the merchant after the successful creation of an order. They are essential to ensure Billie is able to efficiently and accurately match payments to invoices. Virtual IBANs ensure fast payout times and reliable payment reconciliations and help avoid unwarranted dunning.

## Requirements
- PHP 5.6 or higher 
- Magento 1.9.0.0 or higher

## Magento Installation

Download Source and copy into Magento root folder<br/>
Clear Magento Caches and login again<br/>
Goto System -> Configuration -> Billie Core Config
![Billie Core Configuration](docs/img/billie_core_config_select.png)

Billie and configure housenumber and invoice URL<br/>
![Billie Core Configuration](docs/img/billie_core_config.png)

Goto Paymentmethods and configure Billie PayAfterDelivery method.<br/>
![Billie Core Configuration](docs/img/billie_core_payment.png)

Ready to go

Additional configuration<br/>
Goto System -> Configuration -> Customer -> Create account -> enable Vat visibility in frontend<br/>
Goto System -> Configuration -> Customer -> Customer address head -> Enable prefix and use for male one of (Male,Mister,Herr,Mann) and for female one of (Female,Miss,Frau)

## Information

Change in file app/design/frontend/base/default/template/checkout/onepage/billing.phtml and app/design/frontend/base/default/template/persistent/onepage/billing.phtml or in your local theme folder


    <label for="billing:company"><?php echo $this->__('Company') ?></label>
    <div class="input-box">
        <input type="text" id="billing:company" name="billing[company]" value="<?php echo $this->escapeHtml($this->getAddress()->getCompany()) ?>" title="<?php echo Mage::helper('core')->quoteEscape($this->__('Company')) ?>" class="input-text <?php echo $this->helper('customer/address')->getAttributeValidationClass('company') ?>" />
    </div>    
to
    
    <label for="billing:company" class="required"><em>*</em><?php echo $this->__('Company') ?></label>
    <div class="input-box">
        <input type="text" id="billing:company" name="billing[company]" value="<?php echo $this->escapeHtml($this->getAddress()->getCompany()) ?>" title="<?php echo Mage::helper('core')->quoteEscape($this->__('Company')) ?>" class="input-text required <?php echo $this->helper('customer/address')->getAttributeValidationClass('company') ?>" />                        
    </div>    

## Dokumentation

#### Billie orders:
![Billie Core Configuration](docs/img/billie_core_magento_menu.png)


Under Billie Payments -> Billie Order you find all orders made with billie payment. You can sort and filter the columns as needed. The grid contains the following data<br/>

* Bestellung: magento order increment_id
* Bestellt in (Store): Storeview
* Bestellt am: order create date
* Rechnung an: order billing name
* Firma: company name
* Rechtsform: legal form
* Billie Reference Id: Billie reference ID 
* Gesamt: billing grand total
* Status: status of order 
* Aktion: link to order detail

![Billie Core Configuration](docs/img/billie_core_payment_history.png)

#### Order Detail

In order detail you find the payment information block. Where you can find find the payment information for the client.
![Billie Core Configuration](docs/img/billie_core_order.png)

In comment history you can find all billie actions only viewable for the admin
![Billie Core Configuration](docs/img/billie_core_order_history.png)

Before Billie is invoicing the client. The order has to be invoiced and shipped. There for use the magento default buttons.
![Billie Core Configuration](docs/img/billie_core_order_actions.png)

You can cancel an order with magento default cancel button. Notice that an order which is already pay out can't be pay back by billie. You will get an notice in magento.

## Contact
Billie GmbH<br/>
Charlottenstraße 4<br/>
10969 Berlin<br/>

## License
