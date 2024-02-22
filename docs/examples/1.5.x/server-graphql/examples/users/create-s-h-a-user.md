mutation {
    usersCreateSHAUser(
        userId: "[USER_ID]",
        email: "email@example.com",
        password: "password",
        passwordVersion: "sha1",
        name: "[NAME]"
    ) {
        _id
        _createdAt
        _updatedAt
        name
        password
        hash
        hashOptions
        registration
        status
        labels
        passwordUpdate
        email
        phone
        emailVerification
        phoneVerification
        mfa
        totp
        prefs {
            data
        }
        targets {
            _id
            _createdAt
            _updatedAt
            name
            userId
            providerId
            providerType
            identifier
        }
        accessedAt
    }
}