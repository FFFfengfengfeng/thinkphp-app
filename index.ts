import axios, { AxiosResponse } from 'axios'
import colors from 'colors'
import commander from 'commander'

const URL = 'https://restapi.amap.com/v3/weather/weatherInfo'
const KEY = 'f0d521e31ff41dd927d2add4274ec783'

commander
  .version('0.1.0')
  .option('-c --city [name]', 'enter a city name')
  .parse(process.argv)

if (process.argv.slice(2).length === 0) {
  commander.outputHelp(colors.red)
  process.exit()
}

interface IWeatherResponse {
  status: string
  count: string
  info: string
  infocode: string
  lives: ILive[]
}

interface ILive {
  province: string
  city: string
  adcode: string
  weather: string
  temperature: string
  winddirection: string
  windpower: string
  humidity: string
  reporttime: string
}

async function getWeather(city: string) {
  const res = await axios.get(`${URL}?city=${encodeURI(city)}&key=${KEY}`)
  const live = res.data.lives[0];
  console.log(colors.yellow(live.reporttime));
  console.log(colors.white(`${live.province}-${live.city}`));
  console.log(colors.green(`${live.weather} ${live.temperature}度`));
}
// axios.get(`${URL}?city=${encodeURI(commander.city)}&key=${KEY}`).then((res: AxiosResponse<IWeatherResponse>) => {
//   const live = res.data.lives[0];
//   console.log(colors.yellow(live.reporttime));
//   console.log(colors.white(`${live.province}-${live.city}`));
//   console.log(colors.green(`${live.weather} ${live.temperature}度`));
// }) 

getWeather(commander.city)