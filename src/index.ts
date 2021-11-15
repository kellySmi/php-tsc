import * as jobs from './jobs';
const args = process.argv;
// call file from args[2]
Object.keys(jobs).forEach((j: string) => {
    if(j === args[2]){
        /// call the matching function    
         return jobs[j](args[3]); /// : @input string
        //return console.log(JSON.stringify(args));
    }
});

