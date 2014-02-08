<!doctype html> 
 <html lang="zh-CN"> 
    <head> 
        <meta charset="UTF-8"> 
        {{ HTML::style('css/style.css') }}
        <title></title> 
    </head> 
     <body> 
         <div id="header_wrapper"> 
             <div id="header"> 
                 <div id="title"> 
                     <h1><a href="/"></a><h1> 
                 </div> 
             </div> 
         </div> 
         <div id="main_wrapper" > 
             <div id="main"> 
                 <div id="article"> 
                     @yield('content') 
                 </div> 
             </div> 
         </div> 
         <div id="footer_wrapper"> 
             <div id="footer"> 
                 <span> 
                     <a href="/">文档目录</a> 
                 </span> 
                 本页最后修订于：1970年1月1日 | 反馈：test@test.com 
             </div> 
         </div> 
         <div class="clear"></div> 
     </body> 
 </html> 
