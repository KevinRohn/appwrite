const sdk = require('node-appwrite');

const client = new sdk.Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
    .setSession(''); // The user session to authenticate with

const avatars = new sdk.Avatars(client);

const response = await avatars.getInitials(
    '[NAME]', // name (optional)
    0, // width (optional)
    0, // height (optional)
    '' // background (optional)
);