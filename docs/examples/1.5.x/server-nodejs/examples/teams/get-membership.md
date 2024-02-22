const sdk = require('node-appwrite');

const client = new sdk.Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
    .setSession(''); // The user session to authenticate with

const teams = new sdk.Teams(client);

const response = await teams.getMembership(
    '[TEAM_ID]', // teamId
    '[MEMBERSHIP_ID]' // membershipId
);