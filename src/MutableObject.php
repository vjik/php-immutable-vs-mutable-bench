<?php

declare(strict_types=1);

namespace Vjik\PhpImmutableVsMutableBench;

final class MutableObject
{
    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?int $age = null;
    private ?string $bio = null;
    private ?string $email = null;
    private ?string $phoneNumber = null;
    private ?string $address = null;
    private ?string $city = null;
    private ?string $state = null;
    private ?string $country = null;
    private ?string $postalCode = null;
    private ?string $occupation = null;
    private ?string $company = null;
    private ?string $website = null;
    private ?string $gender = null;
    private ?string $nationality = null;
    private ?string $dateOfBirth = null;
    private ?string $maritalStatus = null;
    private ?string $hobbies = null;
    private ?string $languagesSpoken = null;
    private ?string $education = null;
    private ?string $skills = null;
    private ?string $linkedinProfile = null;
    private ?string $twitterHandle = null;
    private ?string $instagramHandle = null;
    private ?string $facebookProfile = null;
    private ?string $githubProfile = null;
    private ?string $portfolioUrl = null;
    private ?string $vehicleType = null;
    private ?string $drivingLicense = null;
    private ?string $healthInsuranceProvider = null;
    private ?string $emergencyContactName = null;
    private ?string $emergencyContactNumber = null;
    private ?string $preferredContactMethod = null;
    private ?string $subscriptionStatus = null;
    private ?string $notes = null;

    public function setFirstName(?string $firstName): MutableObject
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(?string $lastName): MutableObject
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setAge(?int $age): MutableObject
    {
        $this->age = $age;
        return $this;
    }

    public function setBio(?string $bio): MutableObject
    {
        $this->bio = $bio;
        return $this;
    }

    public function setEmail(?string $email): MutableObject
    {
        $this->email = $email;
        return $this;
    }

    public function setPhoneNumber(?string $phoneNumber): MutableObject
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function setAddress(?string $address): MutableObject
    {
        $this->address = $address;
        return $this;
    }

    public function setCity(?string $city): MutableObject
    {
        $this->city = $city;
        return $this;
    }

    public function setState(?string $state): MutableObject
    {
        $this->state = $state;
        return $this;
    }

    public function setCountry(?string $country): MutableObject
    {
        $this->country = $country;
        return $this;
    }

    public function setPostalCode(?string $postalCode): MutableObject
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function setOccupation(?string $occupation): MutableObject
    {
        $this->occupation = $occupation;
        return $this;
    }

    public function setCompany(?string $company): MutableObject
    {
        $this->company = $company;
        return $this;
    }

    public function setWebsite(?string $website): MutableObject
    {
        $this->website = $website;
        return $this;
    }

    public function setGender(?string $gender): MutableObject
    {
        $this->gender = $gender;
        return $this;
    }

    public function setNationality(?string $nationality): MutableObject
    {
        $this->nationality = $nationality;
        return $this;
    }

    public function setDateOfBirth(?string $dateOfBirth): MutableObject
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    public function setMaritalStatus(?string $maritalStatus): MutableObject
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    public function setHobbies(?string $hobbies): MutableObject
    {
        $this->hobbies = $hobbies;
        return $this;
    }

    public function setLanguagesSpoken(?string $languagesSpoken): MutableObject
    {
        $this->languagesSpoken = $languagesSpoken;
        return $this;
    }

    public function setEducation(?string $education): MutableObject
    {
        $this->education = $education;
        return $this;
    }

    public function setSkills(?string $skills): MutableObject
    {
        $this->skills = $skills;
        return $this;
    }

    public function setLinkedinProfile(?string $linkedinProfile): MutableObject
    {
        $this->linkedinProfile = $linkedinProfile;
        return $this;
    }

    public function setTwitterHandle(?string $twitterHandle): MutableObject
    {
        $this->twitterHandle = $twitterHandle;
        return $this;
    }

    public function setInstagramHandle(?string $instagramHandle): MutableObject
    {
        $this->instagramHandle = $instagramHandle;
        return $this;
    }

    public function setFacebookProfile(?string $facebookProfile): MutableObject
    {
        $this->facebookProfile = $facebookProfile;
        return $this;
    }

    public function setGithubProfile(?string $githubProfile): MutableObject
    {
        $this->githubProfile = $githubProfile;
        return $this;
    }

    public function setPortfolioUrl(?string $portfolioUrl): MutableObject
    {
        $this->portfolioUrl = $portfolioUrl;
        return $this;
    }

    public function setVehicleType(?string $vehicleType): MutableObject
    {
        $this->vehicleType = $vehicleType;
        return $this;
    }

    public function setDrivingLicense(?string $drivingLicense): MutableObject
    {
        $this->drivingLicense = $drivingLicense;
        return $this;
    }

    public function setHealthInsuranceProvider(?string $healthInsuranceProvider): MutableObject
    {
        $this->healthInsuranceProvider = $healthInsuranceProvider;
        return $this;
    }

    public function setEmergencyContactName(?string $emergencyContactName): MutableObject
    {
        $this->emergencyContactName = $emergencyContactName;
        return $this;
    }

    public function setEmergencyContactNumber(?string $emergencyContactNumber): MutableObject
    {
        $this->emergencyContactNumber = $emergencyContactNumber;
        return $this;
    }

    public function setPreferredContactMethod(?string $preferredContactMethod): MutableObject
    {
        $this->preferredContactMethod = $preferredContactMethod;
        return $this;
    }

    public function setSubscriptionStatus(?string $subscriptionStatus): MutableObject
    {
        $this->subscriptionStatus = $subscriptionStatus;
        return $this;
    }

    public function setNotes(?string $notes): MutableObject
    {
        $this->notes = $notes;
        return $this;
    }
}
