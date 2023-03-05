import {defineStore} from "pinia";

export const useUserWeatherStore = defineStore('userWeather', {
    state: () => {
        return {users: []}
    },
    actions: {
        getUsersWeather() {
            fetch('http://localhost:8000/api/user-weather')
                .then((response) => response.json())
                .then((data) => {
                    this.users = data.data
                })
                .catch(error => console.log(error))
        },
    },
})
