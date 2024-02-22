import 'package:appwrite/appwrite.dart';

Client client = Client()
  .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
  .setProject('5df5acd0d48c2'); // Your project ID

Storage storage = Storage(client);

Future result = storage.getFile(
  bucketId: '[BUCKET_ID]',
  fileId: '[FILE_ID]',
);

result.then((response) {
  print(response);
}).catchError((error) {
  print(error.response);
});
