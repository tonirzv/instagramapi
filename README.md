## Instagramapi
Instagramapi allows you to get pictures of an instagram account.

## Deployment

1. Register your application here: https://www.instagram.com/developer/ , then you will get the CLIENT-ID.

2. Direct your user to our authorization URL
https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=token
At this point, we present the user with a login screen and then a confirmation screen where they grant your app’s access to their Instagram data. Note that unlike the explicit flow the response type here is “token”.

3. Receive the access_token via the URL fragment
Once the user has authenticated and then authorized your application, Instagram redirects them to your redirect_uri with the access_token in the url fragment. It will look like this: http://your-redirect-uri#access_token=ACCESS-TOKEN
Simply grab the access_token off the URL fragment and you’re good to go. If the user chooses not to authorize your application, you’ll receive the same error response as in the explicit flow

## Usage

Here is an example (you can check it on index.php), you can get your photos.

```php
include('Instagram.php');
$instagram = new Instagram('507771294.2268c89.bde021deec974bbf9a2d5e95dfd57662');
$pictures = json_decode($instagram->getPictures(20));
```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Future
In the future, Instagramapi will can get and save your photos in your web server.
