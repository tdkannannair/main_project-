import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

user: any;
  constructor() {
   this.user = {
    name: 'muneeb',
    job: 'student',

    phone: ['25425135635', '56845654565']
  }; }
  toggle(){
    this.check=!this.check;  }

  ngOnInit() {
  }

}
