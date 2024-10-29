<?php

declare(strict_types=1);

namespace Vjik\PhpImmutableVsMutableBench;

/**
 * @Iterations(50)
 * @Revs(1)
 * @BeforeMethods("setUp")
 */
final class MainBench
{
    public function setUp(): void
    {
        new MutableObject();
        new ImmutableObject();
    }

    public function benchMutable1(): void
    {
        (new MutableObject())->setFirstName('John');
    }

    public function benchImmutable1(): void
    {
        (new ImmutableObject())->withFirstName('John');
    }

    public function benchMutable14(): void
    {
        (new MutableObject())
            ->setFirstName('John')
            ->setLastName('Doe')
            ->setAge(30)
            ->setBio('A sample bio for testing purposes.')
            ->setEmail('john.doe@example.com')
            ->setPhoneNumber('+1234567890')
            ->setAddress('123 Main St')
            ->setCity('Sample City')
            ->setState('Sample State')
            ->setCountry('Sample Country')
            ->setPostalCode('12345')
            ->setOccupation('Software Developer')
            ->setCompany('Example Corp')
            ->setWebsite('https://example.com');
    }

    public function benchImmutable14(): void
    {
        (new ImmutableObject())
            ->withFirstName('John')
            ->withLastName('Doe')
            ->withAge(30)
            ->withBio('A sample bio for testing purposes.')
            ->withEmail('john.doe@example.com')
            ->withPhoneNumber('+1234567890')
            ->withAddress('123 Main St')
            ->withCity('Sample City')
            ->withState('Sample State')
            ->withCountry('Sample Country')
            ->withPostalCode('12345')
            ->withOccupation('Software Developer')
            ->withCompany('Example Corp')
            ->withWebsite('https://example.com');
    }

    public function benchMutable36(): void
    {
        (new MutableObject())
            ->setFirstName('John')
            ->setLastName('Doe')
            ->setAge(30)
            ->setBio('A sample bio for testing purposes.')
            ->setEmail('john.doe@example.com')
            ->setPhoneNumber('+1234567890')
            ->setAddress('123 Main St')
            ->setCity('Sample City')
            ->setState('Sample State')
            ->setCountry('Sample Country')
            ->setPostalCode('12345')
            ->setOccupation('Software Developer')
            ->setCompany('Example Corp')
            ->setWebsite('https://example.com')
            ->setGender('Male')
            ->setNationality('American')
            ->setDateOfBirth('1990-01-01')
            ->setMaritalStatus('Single')
            ->setHobbies('Coding, Reading')
            ->setLanguagesSpoken('English, Spanish')
            ->setEducation('Bachelor\'s Degree in Computer Science')
            ->setSkills('PHP, JavaScript, SQL')
            ->setLinkedinProfile('https://linkedin.com/in/johndoe')
            ->setTwitterHandle('@johndoe')
            ->setInstagramHandle('@john_doe')
            ->setFacebookProfile('https://facebook.com/johndoe')
            ->setGithubProfile('https://github.com/johndoe')
            ->setPortfolioUrl('https://johndoe.com')
            ->setVehicleType('Car')
            ->setDrivingLicense('Full')
            ->setHealthInsuranceProvider('Health Corp')
            ->setEmergencyContactName('Jane Doe')
            ->setEmergencyContactNumber('+0987654321')
            ->setPreferredContactMethod('Email')
            ->setSubscriptionStatus('Active')
            ->setNotes('A note about John Doe.');
    }

    public function benchImmutable36(): void
    {
        (new ImmutableObject())
            ->withFirstName('John')
            ->withLastName('Doe')
            ->withAge(30)
            ->withBio('A sample bio for testing purposes.')
            ->withEmail('john.doe@example.com')
            ->withPhoneNumber('+1234567890')
            ->withAddress('123 Main St')
            ->withCity('Sample City')
            ->withState('Sample State')
            ->withCountry('Sample Country')
            ->withPostalCode('12345')
            ->withOccupation('Software Developer')
            ->withCompany('Example Corp')
            ->withWebsite('https://example.com')
            ->withGender('Male')
            ->withNationality('American')
            ->withDateOfBirth('1990-01-01')
            ->withMaritalStatus('Single')
            ->withHobbies('Coding, Reading')
            ->withLanguagesSpoken('English, Spanish')
            ->withEducation('Bachelor\'s Degree in Computer Science')
            ->withSkills('PHP, JavaScript, SQL')
            ->withLinkedinProfile('https://linkedin.com/in/johndoe')
            ->withTwitterHandle('@johndoe')
            ->withInstagramHandle('@john_doe')
            ->withFacebookProfile('https://facebook.com/johndoe')
            ->withGithubProfile('https://github.com/johndoe')
            ->withPortfolioUrl('https://johndoe.com')
            ->withVehicleType('Car')
            ->withDrivingLicense('Full')
            ->withHealthInsuranceProvider('Health Corp')
            ->withEmergencyContactName('Jane Doe')
            ->withEmergencyContactNumber('+0987654321')
            ->withPreferredContactMethod('Email')
            ->withSubscriptionStatus('Active')
            ->withNotes('A note about John Doe.');
    }
}
