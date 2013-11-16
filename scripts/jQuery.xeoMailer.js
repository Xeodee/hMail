/**
 * Created by Steve McCard (Xe0) on 11/14/13.
 */


var schoolData,schoolCount,XML,coachName,collegeName,coachEmail,collegeMascot,item;

var s=300,
    schoolDataObj=new Object(),
    coachNameHasError=true,
    coachEmailHasError=true,
    collegeNameHasError=true,
    mascotNameHasError=true,
    emailRegex = /\S+@\S+\.\S+/;

function ajaxListColleges(first){
    if(!first){
        $('table.collegeList').remove();
    }
    $.ajax({
        type: "GET",
        url: "data/list.xml",
        cache: false,
        dataType: "xml",
        success: function(xml){
            XML=xml;
            schoolData = $(xml).find('schools').children();
            $.each(schoolData, function(index){
                writeEachSchool(index,xml);
            });

        }

    });
}

function noCoachNameError(input){
    if(!input){
        $('.error.name.nomatch').slideUp(s);
        $('.error.name.empty').slideDown(s);
        coachNameHasError=true;
    } else if(input && !input.match(/[a-zA-Z]/i)){
        $('.error.name.empty').slideUp(s);
        $('.error.name.nomatch').slideDown(s);
        coachNameHasError=true;
    }
    if(input && input.match(/[a-zA-Z]/i)){
        $('.error.name.empty').slideUp(s);
        $('.error.name.nomatch').slideUp(s);
        coachNameHasError=false;
        schoolDataObj.coachName=input;
    }
}

function noCoachEmailError(input){
    if(!input){
        $('.error.coachEmail.empty').slideDown(s);
        $('.error.coachEmail.nomatch').slideUp(s);
        coachEmailHasError=true;
    }else if(input && !emailRegex.test(input)){
        $('.error.coachEmail.empty').slideUp(s);
        $('.error.coachEmail.nomatch').slideDown(s);
        coachEmailHasError=true;
    }
    if(input && emailRegex.test(input)){
        $('.error.coachEmail.empty').slideUp(s);
        $('.error.coachEmail.nomatch').slideUp(s);
        coachEmailHasError=false;
        schoolDataObj.coachEmail=input;
    }

}
function noCollegeNameError(input){
    if(!input){
    //    $('.error.collegeName.nomatch').slideUp(s);
        $('.error.collegeName.empty').slideDown(s);
        collegeNameHasError=true;
    } else {
        $('.error.collegeName.empty').slideUp(s);
   //     $('.error.name.nomatch').slideUp(s);
        collegeNameHasError=false;
        schoolDataObj.collegeName=input;
    }

}
function noCollegeMascotError(input){

    if(!input){
        $('.error.mascotName.nomatch').slideUp(s);
        $('.error.mascotName.empty').slideDown(s);
        mascotNameHasError=true;
    } else if(input && !input.match(/[a-zA-Z]/i)){
        $('.error.mascotName.empty').slideUp(s);
        $('.error.mascotName.nomatch').slideDown(s);
        mascotNameHasError=true;
    }
    if(input && input.match(/[a-zA-Z]/i)){
        $('.error.mascotName.empty').slideUp(s);
        $('.error.mascotName.nomatch').slideUp(s);
        mascotNameHasError=false;
        schoolDataObj.mascotName=input;
    }
}

function addNewCollege(){

if(!mascotNameHasError && !coachEmailHasError && !coachEmailHasError && !coachNameHasError){

    var message ='Please make sure these are correct\n\n'+
        'Coach Name: '+schoolDataObj.coachName+'\n'+
        'Coach Email: '+schoolDataObj.coachEmail+'\n'+
        'College Name: '+schoolDataObj.collegeName+'\n'+
        'College Mascot: '+schoolDataObj.mascotName+'\n'+
        'Clicking Ok Will add this Item.'

    var ok = confirm(message);

    if(ok){
        addNewCollegeAJAX(schoolDataObj.coachName,schoolDataObj.coachEmail,schoolDataObj.collegeName,schoolDataObj.mascotName);
    }
}

}




function addNewCollegeAJAX(n,e,c,m){
    var xmlToAdd = $.parseXML('<schoolData>'+
                        '<name>'+n+'</name>'+
                        '<scoolName>'+c+'</scoolName>'+
                        '<email>'+e+'</email>'+
                        '<mascot>'+m+'</mascot>'+
                    '</schoolData>');

    $(XML).find('schools').append(xmlToAdd);
    console.log(XML);
}

function writeEachSchool(i,x){
    schoolCount = schoolData.length;
    item = $(x).find('schoolData').eq(i);
    coachName = item.find('name').text();
    coachEmail = item.find('email').text();
    collegeName = item.find('schoolName').text();
    collegeMascot = item.find('mascot').text();
    $('.currentList').append('<table class="collegeList">'+
                                '<tr>'+
                                    '<td class="name">Coach:</td>'+
                                    '<td class="value">'+coachName+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td class="name">e-mail:</td>'+
                                    '<td class="value">'+coachEmail+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td class="name">College:</td>'+
                                    '<td class="value">'+collegeName+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td class="name">Mascot:</td>'+
                                    '<td class="value">'+collegeMascot+'</td>'+
                                '</tr>'+
    '</table>');
    console.log(i);
}

$(document).ready(function(){
    $(this).on().change(function(){
        console.log($(this).val());
    });

    $('#cName').blur(function(){
        noCoachNameError($(this).val());
    });
    $('#cEmail').blur(function(){
        noCoachEmailError($(this).val());
    });
    $('#college').blur(function(){
       noCollegeNameError($(this).val());
    });
    $('#mascot').blur(function(){
        noCollegeMascotError($(this).val());
    });

    ajaxListColleges(true);



});
