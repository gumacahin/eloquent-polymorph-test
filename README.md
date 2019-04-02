# eloquent-polymorph-test

This example is taken directly from 
https://laravel.com/docs/5.8/eloquent-relationships#one-to-one-polymorphic-relations

`Image::find(1)->imageable` returns related `User` but
`User::find(1)->image` does not return the related `Image`.

`Image::find(2)->imageable` returns related `Post` but
`Post::find(1)->image` does not return the related `Image`.

