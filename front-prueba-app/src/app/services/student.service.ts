import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root',
})
export class StudentService {
  private apiUrl = 'http://127.0.0.1:8000/api';
  constructor(private http: HttpClient) {}

  getStudent(matricula: string) {
    return this.http.get(`${this.apiUrl}/students/${matricula}`);
  }

  subscribeStudent(matricula: string, codigo: string) {
    return this.http.post(
      `${this.apiUrl}/students/${matricula}/subjects/${codigo}`,
      {}
    );
  }

  unsubscribeStudent(matricula: string, codigo: string) {
    return this.http.delete(
      `${this.apiUrl}/students/${matricula}/subjects/${codigo}`
    );
  }

  getSchedule(matricula: string) {
    return this.http.get(`${this.apiUrl}/students/${matricula}/schedule`);
  }
}
