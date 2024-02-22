import 'package:dart_appwrite/dart_appwrite.dart';

Client client = Client()
  .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
  .setProject('5df5acd0d48c2') // Your project ID
  .setSession(''); // The user session to authenticate with

Account account = Account(client);

Future result = account.deleteAuthenticator(
  type:  AuthenticatorType.totp,
  otp: '[OTP]',
);

result.then((response) {
  print(response);
}).catchError((error) {
  print(error.response);
});