<?php

/**
 * CarDetail
 *
 * @package SwiftDevLabs\SgCarMart
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

namespace SwiftDevLabs\SgCarMart;

use SwiftDevLabs\SgCarMart\Response;

class CarDetail extends Response
{
    /**
     * Set Car Id. To be used by `SgCarMart::getCarDetail()` only
     * @param [type] $id [description]
     */
    public function setId($id)
    {
        $this->getData()->car->id = $id;

        return $this;
    }

    /**
     * Get sgCarMart car id
     * @param int $id Car Id
     */
    public function getId()
    {
        return $this->getData()->car->id;
    }

    /**
     * Get car plate
     * @return string Car plate
     */
    public function getCarPlate()
    {
        return is_object($carplate = $this->getData()->car->carplate) ?
            false :
            $carplate;
    }

    /**
     * Get car model
     * @return string Car model
     */
    public function getModel()
    {
        return is_object($model = $this->getData()->car->model) ?
            false :
            $model;
    }

    /**
     * Get price
     * @return string
     */
    public function getPrice()
    {
        return is_object($price = $this->getData()->car->price) ?
            false :
            $price;
    }

    /**
     * Get road tax
     * @return string
     */
    public function getRoadTax()
    {
        return is_object($road_tax = $this->getData()->car->road_tax) ?
            false :
            $road_tax;
    }

    /**
     * Get transmission
     * @return string Transmission
     */
    public function getTransmission()
    {
        return is_object($transmission = $this->getData()->car->transmission) ?
            false :
            $transmission;
    }

    /**
     * Get Engine Cap
     * @return string Engine cap
     */
    public function getEngineCap()
    {
        return is_object($engine_cap = $this->getData()->car->engine_cap) ?
            false :
            $engine_cap;
    }

    /**
     * Get registration date
     * @return string Registration date
     */
    public function getRegistrationDate()
    {
        return is_object($reg_date = $this->getData()->car->reg_date) ?
            false :
            $reg_date;
    }

    /**
     * Get fuel type
     * @return string Fuel type
     */
    public function getFuelType()
    {
        return is_object($fuel_type = $this->getData()->car->fuel_type) ?
            false :
            $fuel_type;
    }

    /**
     * Get mileage
     * @return string Mileage
     */
    public function getMileage()
    {
        return is_object($mileage = $this->getData()->car->mileage) ?
            false :
            $mileage;
    }

    /**
     * Get features
     * @return string Features
     */
    public function getFeatures()
    {
        return is_object($features = $this->getData()->car->features) ?
            false :
            $features;
    }

    /**
     * Get accessories
     * @return string Accessories
     */
    public function getAccessories()
    {
        return is_object($accessories = $this->getData()->car->accessories) ?
            false :
            $accessories;
    }

    /**
     * Get description
     * @return string Description
     */
    public function getDescription()
    {
        return is_object($description = $this->getData()->car->description) ?
            false :
            $description;
    }

    /**
     * Get additional
     * @return string Additional
     */
    public function getAdditional()
    {
        return is_object($additional = $this->getData()->car->additional) ?
            false :
            $additional;
    }

    /**
     * Get COE
     * @return string COE
     */
    public function getCoe()
    {
        return is_object($coe = $this->getData()->car->coe) ?
            false :
            $coe;
    }

    /**
     * Get OMV
     * @return string OMV
     */
    public function getOmv()
    {
        return is_object($omv = $this->getData()->car->omv) ?
            false :
            $omv;
    }

    /**
     * Get Depreciation
     * @return string Depreciation
     */
    public function getDepreciation()
    {
        return is_object($depreciation = $this->getData()->car->depreciation) ?
            false :
            $depreciation;
    }

    /**
     * Get owners
     * @return int Owners
     */
    public function getOwners()
    {
        return is_object($owners = $this->getData()->car->owners) ?
            false :
            $owners;
    }

    /**
     * Get vehicle type
     * @return string Vehicle Type
     */
    public function getVehicleType()
    {
        return is_object($veh_type = $this->getData()->car->veh_type) ?
            false :
            $veh_type;
    }

    /**
     * Get availability
     * @return string Availability
     */
    public function getAvailability()
    {
        return is_object($availability = $this->getData()->car->availability) ?
            false :
            $availability;
    }

    /**
     * Is available?
     * @return boolean
     */
    public function isAvailable()
    {
        return $this->getAvailability() === 'Available';
    }

    /**
     * Is sold?
     * @return boolean
     */
    public function isSold()
    {
        return $this->getAvailability() === 'SOLD';
    }

    /**
     * Get images object. Images object includes two keys `small_img_link` and `big_img_link`
     *
     * @return stdObject array of images
     */
    public function getImages()
    {
        return $this->getData()->car->images;
    }

    /**
     * Get contact person
     * @return string Contact person
     */
    public function getContactPerson()
    {
        return is_object($contact_person = $this->getData()->car->contact_person) ?
            false :
            $contact_person;
    }

    /**
     * Get contact number
     * @return string Contact number
     */
    public function getContactNumber()
    {
        return is_object($contact_number = $this->getData()->car->contact_number) ?
            false :
            $contact_number;
    }

    /**
     * Get posted date
     * @return string Posted date
     * @todo  Make this a date object
     */
    public function getPosted()
    {
        return is_object($posted = $this->getData()->car->posted) ?
            false :
            $posted;
    }

    /**
     * Get updated
     * @return string Updated date
     * @todo  Make this date object
     */
    public function getUpdated()
    {
        return is_object($updated = $this->getData()->car->updated) ?
            false :
            $updated;
    }

    /**
     * Get manufactured year
     * @return string Manufactured
     */
    public function getManufactured()
    {
        return is_object($manufactured = $this->getData()->car->manufactured) ?
            false :
            $manufactured;
    }

    /**
     * Get Arf
     * @return string Arf
     */
    public function getArf()
    {
        return is_object($arf = $this->getData()->car->arf) ?
            false :
            $arf;
    }

    /**
     * Get Curb weight
     * @return string Curb weight
     */
    public function getCurbWeight()
    {
        return is_object($curb_weight = $this->getData()->car->curb_weight) ?
            false :
            $curb_weight;
    }
}
