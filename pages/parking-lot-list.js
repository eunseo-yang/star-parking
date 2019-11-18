import React from "react";
import Head from "next/head";
import styled, { css } from "styled-components";
import Search from "../components/molecules/search/search";
import List from "../components/organisms/list/List";

export default function SignUp() {
  return (
    <Wrapper>
      <Head>
        <title>Sign Up</title>
      </Head>
      <Search></Search>
      <List></List>
    </Wrapper>
  );
}

const Wrapper = styled.div`
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
`;
