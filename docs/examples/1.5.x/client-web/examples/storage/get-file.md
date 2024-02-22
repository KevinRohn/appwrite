import { Client, Storage } from "appwrite";

const client = new Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('5df5acd0d48c2'); // Your project ID

const storage = new Storage(client);

const result = await storage.getFile(
    '[BUCKET_ID]', // bucketId
    '[FILE_ID]' // fileId
);

console.log(response);