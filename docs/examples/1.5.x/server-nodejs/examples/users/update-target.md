const sdk = require('node-appwrite');

const client = new sdk.Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
    .setKey('919c2d18fb5d4...a2ae413da83346ad2'); // Your secret API key

const users = new sdk.Users(client);

const response = await users.updateTarget(
    '[USER_ID]', // userId
    '[TARGET_ID]', // targetId
    '[IDENTIFIER]', // identifier (optional)
    '[PROVIDER_ID]', // providerId (optional)
    '[NAME]' // name (optional)
);