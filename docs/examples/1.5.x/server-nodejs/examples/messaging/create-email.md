const sdk = require('node-appwrite');

const client = new sdk.Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
    .setKey('919c2d18fb5d4...a2ae413da83346ad2'); // Your secret API key

const messaging = new sdk.Messaging(client);

const response = await messaging.createEmail(
    '[MESSAGE_ID]', // messageId
    '[SUBJECT]', // subject
    '[CONTENT]', // content
    [], // topics (optional)
    [], // users (optional)
    [], // targets (optional)
    [], // cc (optional)
    [], // bcc (optional)
    [], // attachments (optional)
    sdk.MessageStatus.Draft, // status (optional)
    false, // html (optional)
    '' // scheduledAt (optional)
);