import { NgModule }       from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';

import { jqxExpanderComponent } from 'components/angular_jqxexpander';

@NgModule({
    imports: [BrowserModule],
    declarations: [AppComponent, jqxExpanderComponent],
    bootstrap: [AppComponent]
})
export class AppModule { }

