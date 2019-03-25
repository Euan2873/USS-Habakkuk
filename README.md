# [USS Habakkuk](https://uss-habakkuk.netlify.com/)
**"If the moral arc of the universe bends towards justice, then it is science that is the anvil's horn."**

## How the website works
So, the website is built using [Thunderbird](https://thunderbird.netlify.com/), a PHP static site generator. 

### Your site content

The content on the site is in the `content` directory in Markdown (.md) files.
Markdown is a type of formatting used to style text. You can read more about it [here](https://www.markdownguide.org/getting-started). (If you're really stuck, look at this file, it's written in Markdown)
In your content files, you may see something like this at the top
```
---
title: Home
---
```
Make sure to add this to the top of every page you make and change the title. Thunderbird will break if this does not exist.

**How do I create a new page?**
To create a new page, just create a new markdown file in the `content` directory. When you save it, it will automaticlly work on the website. 
If you have a Markdown file called `penguin.md`. You will be able to access this on the site by visiting `https://example.com/penguin`.

### The HTML

If you want to fiddle around with the HTML, you can do so in the `resources/views` directory. Although, the files in there end in `.blade.php`, for the most part they are just plain HTML files. Ask me if you don't understand this part.

### CSS and Javascript

The CSS and Javascript files for the site belong in the `dist` directory in their respective folder names. Feel free to add whatever you want in here.

### Other stuff

* Don't remove the `src` directory or everything will grind to a halt.
* Don't remove the `composer.json`, `config.php`, `thunderbird`, `sample.env`, `local` or `.gitignore` files/folders or things will get messed up.

If you have any other questions, just ask me!

[![Netlify Status](https://api.netlify.com/api/v1/badges/7e4d10bf-83fb-4c78-b9d7-21458559adfc/deploy-status)](https://app.netlify.com/sites/uss-habakkuk/deploys)
