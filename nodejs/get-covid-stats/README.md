# 🦠 Function to fetch COVID-19 statistics
Javascript function that prints today's COVID statistics for a country or for the whole world, with a helper function for the format.

## 📝 Environment Variables
 We are going to use the following environment variable, we can set it by: Going to Settings tab of your Cloud Function and setting it, also on the dashboard when you manually trigger the Function there is a dialog that pops up and you can set it there and finally when using the functions api on the SDK we can set this variable as the second parameter to `createExecution` function.

- APPWRITE_FUNCTION_DATA - Country code in ISO2 format, For example `US`, `HN` etc.


## 🚀 Building and Packaging

To package this example as a cloud function, follow these steps.

```bash
$ cd demos-for-functions/nodejs/get-covid-stats
$ npm i
```

* Ensure that your folder structure looks like this 
```
.
├── index.js
├── node_modules/
├── package-lock.json
└── package.json
```

* Create a tarfile

```bash
$ cd ..
$ tar -zcvf code.tar.gz get-covid-stats
```

* Upload the tarfile to your Appwrite Console and use the following entrypoint command

```bash
node index.js
```
## 🎯 Trigger
Can be triggered manually from the Appwrite Console.
