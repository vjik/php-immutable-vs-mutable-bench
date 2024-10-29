<?php

declare(strict_types=1);

namespace Vjik\PhpImmutableVsMutableBench;

final class ImmutableObject
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

    public function withFirstName(?string $firstName): ImmutableObject
    {
        $new = clone $this;
        $new->firstName = $firstName;
        return $new;
    }

    public function withLastName(?string $lastName): ImmutableObject
    {
        $new = clone $this;
        $new->lastName = $lastName;
        return $new;
    }

    public function withAge(?int $age): ImmutableObject
    {
        $new = clone $this;
        $new->age = $age;
        return $new;
    }

    public function withBio(?string $bio): ImmutableObject
    {
        $new = clone $this;
        $new->bio = $bio;
        return $new;
    }

    public function withEmail(?string $email): ImmutableObject
    {
        $new = clone $this;
        $new->email = $email;
        return $new;
    }

    public function withPhoneNumber(?string $phoneNumber): ImmutableObject
    {
        $new = clone $this;
        $new->phoneNumber = $phoneNumber;
        return $new;
    }

    public function withAddress(?string $address): ImmutableObject
    {
        $new = clone $this;
        $new->address = $address;
        return $new;
    }

    public function withCity(?string $city): ImmutableObject
    {
        $new = clone $this;
        $new->city = $city;
        return $new;
    }

    public function withState(?string $state): ImmutableObject
    {
        $new = clone $this;
        $new->state = $state;
        return $new;
    }

    public function withCountry(?string $country): ImmutableObject
    {
        $new = clone $this;
        $new->country = $country;
        return $new;
    }

    public function withPostalCode(?string $postalCode): ImmutableObject
    {
        $new = clone $this;
        $new->postalCode = $postalCode;
        return $new;
    }

    public function withOccupation(?string $occupation): ImmutableObject
    {
        $new = clone $this;
        $new->occupation = $occupation;
        return $new;
    }

    public function withCompany(?string $company): ImmutableObject
    {
        $new = clone $this;
        $new->company = $company;
        return $new;
    }

    public function withWebsite(?string $website): ImmutableObject
    {
        $new = clone $this;
        $new->website = $website;
        return $new;
    }

    public function withGender(?string $gender): ImmutableObject
    {
        $new = clone $this;
        $new->gender = $gender;
        return $new;
    }

    public function withNationality(?string $nationality): ImmutableObject
    {
        $new = clone $this;
        $new->nationality = $nationality;
        return $new;
    }

    public function withDateOfBirth(?string $dateOfBirth): ImmutableObject
    {
        $new = clone $this;
        $new->dateOfBirth = $dateOfBirth;
        return $new;
    }

    public function withMaritalStatus(?string $maritalStatus): ImmutableObject
    {
        $new = clone $this;
        $new->maritalStatus = $maritalStatus;
        return $new;
    }

    public function withHobbies(?string $hobbies): ImmutableObject
    {
        $new = clone $this;
        $new->hobbies = $hobbies;
        return $new;
    }

    public function withLanguagesSpoken(?string $languagesSpoken): ImmutableObject
    {
        $new = clone $this;
        $new->languagesSpoken = $languagesSpoken;
        return $new;
    }

    public function withEducation(?string $education): ImmutableObject
    {
        $new = clone $this;
        $new->education = $education;
        return $new;
    }

    public function withSkills(?string $skills): ImmutableObject
    {
        $new = clone $this;
        $new->skills = $skills;
        return $new;
    }

    public function withLinkedinProfile(?string $linkedinProfile): ImmutableObject
    {
        $new = clone $this;
        $new->linkedinProfile = $linkedinProfile;
        return $new;
    }

    public function withTwitterHandle(?string $twitterHandle): ImmutableObject
    {
        $new = clone $this;
        $new->twitterHandle = $twitterHandle;
        return $new;
    }

    public function withInstagramHandle(?string $instagramHandle): ImmutableObject
    {
        $new = clone $this;
        $new->instagramHandle = $instagramHandle;
        return $new;
    }

    public function withFacebookProfile(?string $facebookProfile): ImmutableObject
    {
        $new = clone $this;
        $new->facebookProfile = $facebookProfile;
        return $new;
    }

    public function withGithubProfile(?string $githubProfile): ImmutableObject
    {
        $new = clone $this;
        $new->githubProfile = $githubProfile;
        return $new;
    }

    public function withPortfolioUrl(?string $portfolioUrl): ImmutableObject
    {
        $new = clone $this;
        $new->portfolioUrl = $portfolioUrl;
        return $new;
    }

    public function withVehicleType(?string $vehicleType): ImmutableObject
    {
        $new = clone $this;
        $new->vehicleType = $vehicleType;
        return $new;
    }

    public function withDrivingLicense(?string $drivingLicense): ImmutableObject
    {
        $new = clone $this;
        $new->drivingLicense = $drivingLicense;
        return $new;
    }

    public function withHealthInsuranceProvider(?string $healthInsuranceProvider): ImmutableObject
    {
        $new = clone $this;
        $new->healthInsuranceProvider = $healthInsuranceProvider;
        return $new;
    }

    public function withEmergencyContactName(?string $emergencyContactName): ImmutableObject
    {
        $new = clone $this;
        $new->emergencyContactName = $emergencyContactName;
        return $new;
    }

    public function withEmergencyContactNumber(?string $emergencyContactNumber): ImmutableObject
    {
        $new = clone $this;
        $new->emergencyContactNumber = $emergencyContactNumber;
        return $new;
    }

    public function withPreferredContactMethod(?string $preferredContactMethod): ImmutableObject
    {
        $new = clone $this;
        $new->preferredContactMethod = $preferredContactMethod;
        return $new;
    }

    public function withSubscriptionStatus(?string $subscriptionStatus): ImmutableObject
    {
        $new = clone $this;
        $new->subscriptionStatus = $subscriptionStatus;
        return $new;
    }

    public function withNotes(?string $notes): ImmutableObject
    {
        $new = clone $this;
        $new->notes = $notes;
        return $new;
    }
}
