import { Component } from '@angular/core';
import { HttpClient } from  '@angular/common/http';
import { map }  from  'rxjs/operators';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  peliculas: any;

  busqueda: string;

  constructor(private httpClient: HttpClient) {

    this.peliculas = this.httpClient.get('https://api.myjson.com/bins/z0f68').pipe(map(res => res['results']));
  }



}
