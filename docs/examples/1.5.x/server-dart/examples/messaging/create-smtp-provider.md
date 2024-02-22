import 'package:dart_appwrite/dart_appwrite.dart';

Client client = Client()
  .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
  .setProject('5df5acd0d48c2') // Your project ID
  .setKey('919c2d18fb5d4...a2ae413da83346ad2'); // Your secret API key

Messaging messaging = Messaging(client);

Future result = messaging.createSmtpProvider(
  providerId: '[PROVIDER_ID]',
  name: '[NAME]',
  host: '[HOST]',
  port: 1, // (optional)
  username: '[USERNAME]', // (optional)
  password: '[PASSWORD]', // (optional)
  encryption:  .none, // (optional)
  autoTLS: false, // (optional)
  mailer: '[MAILER]', // (optional)
  fromName: '[FROM_NAME]', // (optional)
  fromEmail: 'email@example.com', // (optional)
  replyToName: '[REPLY_TO_NAME]', // (optional)
  replyToEmail: 'email@example.com', // (optional)
  enabled: false, // (optional)
);

result.then((response) {
  print(response);
}).catchError((error) {
  print(error.response);
});