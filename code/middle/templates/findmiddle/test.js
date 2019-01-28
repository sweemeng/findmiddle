/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

                $.getJSON('/jquery-appointment.php',
                        function(data){
                            // alert(data);
                            $.each(data,function(key,value){
                                if(key=='center'){
                                    // alert(value);
                                    initialLocation = new google.maps.LatLng(value[0],value[1]);
                                    map.setCenter(initialLocation);
                                    var marker = new google.maps.Marker({
                                        position : initialLocation,
                                        map:map,
                                        title:'center'
                                        });
                                }

                                else if(key=='sponsored'){
                                    var image = 'icon/poi.png';
                                    $.each(value,function(index,item){
                                        var newLatLng = new google.maps.LatLng(item[1],item[2]);
                                        var marker = new google.maps.Marker({
                                            icon:image,
                                            position : newLatLng,
                                            map:map,
                                            title:value[0]
                                            });
                                    });
                                }
                                else if(key=='friends'){

                                    var image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
                                    $.each(value,function(index,item){

                                        var newLatLng = new google.maps.LatLng(item[0],item[1]);
                                        var marker = new google.maps.Marker({
                                            position : newLatLng,
                                            icon:image,
                                            map:map,
                                            title:"friend"
                                            });
                                    });

                                }
                    });

                });


