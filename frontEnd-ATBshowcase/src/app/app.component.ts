import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent implements OnInit {
  title = 'frontEnd-ATBshowcase';
  constructor(private http:HttpClient){}
  async ngOnInit() {
    await this.getdata();
  }
  async getdata(){
    let data:any = await this.http.get("http://localhost:80/", {
       responseType: 'json' 
    }).toPromise();
    this.showtextData(data);
  }
  showtextData(data:any){
    for (const [key, value] of Object.entries(data)) {
      var tag_text:any = document.getElementById(key)
      if(tag_text){
        tag_text.innerHTML = value
      }
    }
  }
  
  previousSlide(){
    var previousArrow = document.getElementById('previousButtonSlide');
    if(previousArrow){
      previousArrow.click();
    }
  }
  nextSlide(){
    var nextArrow = document.getElementById('nextButtonSlide');
    if(nextArrow){
      nextArrow.click();
    }
  }
}
