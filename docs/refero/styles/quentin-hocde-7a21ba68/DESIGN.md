# Quentin Hocdé — Refero Style

- Refero URL: https://styles.refero.design/style/7a21ba68-2d01-44a6-8b20-149ddef84fef
- Site URL: https://quentinhocde.com
- ID: 7a21ba68-2d01-44a6-8b20-149ddef84fef
- Theme: dark
- Industry: design
- Created: 2026-04-30T01:49:37.900Z
- Ranks: newest: 510, popular: 1170, trending: 1151

> Dramatic typographic stage

## Description

Quentin Hocdé's visual system evokes a dark, cinematic canvas where bold, expanded typography takes center stage. Achromatic colors create a stark contrast, allowing the white text to cut through the deep black background. The design emphasizes deliberate, compact content blocks within a sparse layout, using oversized sans-serifs for dramatic impact, rather than a broad range of type styles.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Page backgrounds, card surfaces, primary text for contextual information |
| Ghost White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Kinetica | Bebas Neue | 700 | 97px, 144px | 0.99, 1.00, 1.04, 1.35 | Dramatic display headlines and impactful brand messaging. The tight line height and negative letter spacing create a dense, powerful presence. |
| PP Neue Montreal | Inter | 400 | 10px, 16px | 1.00, 1.15, 1.20 | Functional UI text, navigation, and detailed information. Its subtle presence supports the Kinetica headlines without competing. |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "12px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Header Navigation Link

**Role:** Primary navigation element

Ghost White text (#ffffff) using PP Neue Montreal at 16px, normal letter spacing, with a minimal 12px right padding from the next item. Underlined on hover or active state.

### Social Link Icon

**Role:** Small, discreet interactive element

Ghost White text (#ffffff) using PP Neue Montreal at 10px, with 12px right margin. Visually minimal, intended for social media links in the header.

### Main Display Headline

**Role:** Prominent, attention-grabbing text

Ghost White text (#ffffff) using Kinetica 700, sized at 144px, with a line height of 0.99 and letter spacing of -0.0300em. Occupies a significant area of the dark canvas.

### Secondary Content Heading

**Role:** Contextual sub-headings

Ghost White text (#ffffff) using Kinetica 700, sized at 97px, with a line height of 1.04 and letter spacing of -0.0300em. Provides a hierarchical step down from the main display headline.

### Body Text Block

**Role:** Descriptive paragraph content

Ghost White text (#ffffff) using PP Neue Montreal 400, sized at 16px, with a line height of 1.20 and normal letter spacing. Used for detailed descriptions.

## Do's

- Prioritize Kinetica for all large, impactful headlines to create a consistent, bold brand statement.
- Use PP Neue Montreal for all body text, navigation, and smaller UI elements, always in Ghost White (#ffffff) against Midnight Ink (#000000).
- Maintain the tight line heights and negative letter spacing of Kinetica to achieve its distinctive dense typographic appearance.
- Ensure generous vertical spacing between content blocks, using at least 40px as a baseline.
- Utilize Ghost White (#ffffff) as the sole accent for interactive elements and subtle borders against the Midnight Ink (#000000) canvas.

## Don'ts

- Avoid using multiple colors; the system relies on a strictly achromatic palette of Ghost White (#ffffff) and Midnight Ink (#000000).
- Do not introduce rounded corners; all elements should feature sharp, defined edges.
- Do not use generic system fonts; always specify Kinetica or PP Neue Montreal.
- Avoid decorative elements or heavy ornamentation that could detract from the typographic focus.
- Do not use subtle elevation or shadows; assume a flat, high-contrast visual hierarchy.

## Layout

The page employs a max-width contained layout where elements are flush left, with implicit centering created by the surrounding negative space. The hero section is full-bleed, stretching the entire viewport width, presenting large, stacked expressive typography. Content sections below follow a more conventional block-stacking pattern, maintaining a comfortable density with strong vertical rhythm. Navigation is a fixed top bar on the left, with social links on the right.

## Imagery

The site's visual language is characterized by an absence of conventional photography or illustrations. Instead, it utilizes subtle, blurry, dark-on-dark abstract shapes in the background, serving as a dynamic, atmospheric backdrop rather than content. Iconography is minimized, appearing only as small, white, uppercase letters for social links, keeping the focus entirely on typography and text-based information. Imagery is purely decorative and atmospheric, not explanatory.

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards Nominees (certain portfolios) | Frequently features black backgrounds, expressive typography, and minimal use of color to highlight design and development skills. |
| Hyper Island | Known for bold, condensed typography on dark backgrounds, creating a strong, modern visual identity. |
| Legwork Studio | Employs dark interfaces with striking, often animated typography as the primary visual focus. |
| Bruno Simon | Personal portfolio with a dark theme, strong typographic presence, and minimalistic interactive elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
accent: #ffffff
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header navigation link: 'About' text using PP Neue Montreal 400, 16px, normal letter spacing, color #ffffff.
2. Create a main display headline: 'CREATIVE TECHNOLOGIST' text using Kinetica 700, 144px, 0.99 line height, -0.0300em letter spacing, color #ffffff.
3. Create a descriptive body paragraph: 'I build handcrafted websites with motion, subtle details and fun interactions.' text using PP Neue Montreal 400, 16px, 1.20 line height, normal letter spacing, color #ffffff.
4. Create a social link: 'TW' text using PP Neue Montreal 400, 10px, normal letter spacing, color #ffffff, with a 12px right margin.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513762928-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513762928-thumb.jpg |
