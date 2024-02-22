import 'package:appwrite/appwrite.dart';

Client client = Client()
  .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
  .setProject('5df5acd0d48c2'); // Your project ID

Avatars avatars = Avatars(client);

// Downloading file
Future result = avatars.getFavicon(
  url: 'https://example.com',
).then((bytes) {
  final file = File('path_to_file/filename.ext');
  file.writeAsBytesSync(bytes)
}).catchError((error) {
    print(error.response);
})

// Displaying image preview
FutureBuilder(
  future: avatars.getFavicon(
  url:'https://example.com' ,
), // Works for both public file and private file, for private files you need to be logged in
  builder: (context, snapshot) {
    return snapshot.hasData && snapshot.data != null
      ? Image.memory(
          snapshot.data,
        )
      : CircularProgressIndicator();
  }
);