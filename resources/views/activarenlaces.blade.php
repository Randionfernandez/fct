<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no initial-scale=1.0 maximun-scale=1.0 minimun-scale=1.0">
        <title>title</title>
    </head>
    <body>
        <nav>
            
                
            {{ dump(request()->path())}}
                        
            
            <ul>
                
                <li class="active"><a href="/">Home</a></li>
                <li class="active"><a href="/about">About</a></li>
                <li class="active"><a href="/portfolio">Portfolio</a></li>
                <li class="active"><a href="/contact">Contact</a></li>
                
                
            </ul>
            
            
        </nav>
            
    </body>
</html>
