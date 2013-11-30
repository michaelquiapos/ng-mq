/**
 * Created by michael.quiapos on 11/7/13.
 */
(function (p) {
    function getScript(url,success){
        var script=document.createElement('script');
        script.src=url;
        var head=document.getElementsByTagName('head')[0],
            done=false;
        script.onload=script.onreadystatechange = function(){
            if ( !done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete') ) {
                done=true;
                success();
                script.onload = script.onreadystatechange = null;
                head.removeChild(script);
            }
        };
        head.appendChild(script);
    }
    getScript('http://code.jquery.com/jquery-1.10.2.min.js',function(){
        // YOUR CODE GOES HERE AND IS EXECUTED AFTER JQUERY LOADS
        //alert("deferred function");
    });
})();