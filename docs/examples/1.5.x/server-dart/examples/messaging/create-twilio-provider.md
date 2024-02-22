import 'package:dart_appwrite/dart_appwrite.dart';

Client client = Client()
  .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
  .setProject('5df5acd0d48c2') // Your project ID
  .setKey('919c2d18fb5d4...a2ae413da83346ad2'); // Your secret API key

Messaging messaging = Messaging(client);

Future result = messaging.createTwilioProvider(
  providerId: '[PROVIDER_ID]',
  name: '[NAME]',
  from: '+12065550100', // (optional)
  accountSid: '[ACCOUNT_SID]', // (optional)
  authToken: '[AUTH_TOKEN]', // (optional)
  enabled: false, // (optional)
);

result.then((response) {
  print(response);
}).catchError((error) {
  print(error.response);
});