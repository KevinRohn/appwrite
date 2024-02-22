import 'package:dart_appwrite/dart_appwrite.dart';

Client client = Client()
  .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
  .setProject('5df5acd0d48c2') // Your project ID
  .setSession(''); // The user session to authenticate with

Databases databases = Databases(client);

Future result = databases.getDocument(
  databaseId: '[DATABASE_ID]',
  collectionId: '[COLLECTION_ID]',
  documentId: '[DOCUMENT_ID]',
  queries: [], // (optional)
);

result.then((response) {
  print(response);
}).catchError((error) {
  print(error.response);
});