import 'package:appwrite/appwrite.dart';

Client client = Client()
  .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
  .setProject('5df5acd0d48c2'); // Your project ID

Account account = Account(client);

Future result = account.updatePhone(
  phone: '+12065550100',
  password: 'password',
);

result.then((response) {
  print(response);
}).catchError((error) {
  print(error.response);
});
