import { Client, Databases } from "https://deno.land/x/appwrite/mod.ts";

const client = new Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2') // Your project ID
    .setKey('919c2d18fb5d4...a2ae413da83346ad2'); // Your secret API key

const databases = new Databases(client);

const response = await databases.createStringAttribute(
    '[DATABASE_ID]', // databaseId
    '[COLLECTION_ID]', // collectionId
    '', // key
    1, // size
    false, // required
    '[DEFAULT]', // default (optional)
    false, // array (optional)
    false // encrypt (optional)
);

console.log(response);