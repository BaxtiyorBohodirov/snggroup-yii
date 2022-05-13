data = $('.exportinfo');

data.each(function( index ) {
    
    nicename =  $(this).attr('nicename');
    countryId =  $(this).attr('countryid');
    dataPathText = $(this).attr('content');
    dataSquareMetr  = $(this).attr('subcontent');
    dataTitle  = $(this).attr('title');
        $("path[title='"+nicename+"']").svg(function(svg) { 
            $($(this), svg.root()).attr('data-pathtext',dataPathText); 
            $($(this), svg.root()).attr('title',dataTitle); 
            $($(this), svg.root()).attr('data-squaremetr',dataSquareMetr); 
            $($(this), svg.root()).attr('fill','#00cb71'); 
        } 
    ); 
   
  });
