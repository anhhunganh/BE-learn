
    function searchKeyPress(e)
    {
        e = e || window.event;
        if (e.keyCode == 13)
        {
            document.getElementById('enter').click();
            return false;
        }
        return true;
    }