const sdk = require('node-appwrite');

const client = new sdk.Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
    .setKey('919c2d18fb5d4...a2ae413da83346ad2'); // Your secret API key

const messaging = new sdk.Messaging(client);

const response = await messaging.updateVonageProvider(
    '[PROVIDER_ID]', // providerId
    '[NAME]', // name (optional)
    false, // enabled (optional)
    '[API_KEY]', // apiKey (optional)
    '[API_SECRET]', // apiSecret (optional)
    '[FROM]' // from (optional)
);