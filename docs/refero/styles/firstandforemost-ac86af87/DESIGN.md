# Firstandforemost — Refero Style

- Refero URL: https://styles.refero.design/style/ac86af87-6f60-42a2-b805-87a168792e55
- Site URL: https://firstandforemost.co
- ID: ac86af87-6f60-42a2-b805-87a168792e55
- Theme: light
- Industry: agency
- Created: 2026-04-30T03:54:11.169Z
- Ranks: newest: 33, popular: 696, trending: 484

> Warm Orange Canvas

## Description

First + Foremost casts a vibrant, modern tone through the interplay of a single bold orange and off-white neutrals. Typography is large and declarative, often acting as a primary visual element. The layout is spacious with strong rectangular sections, allowing content to breathe and emphasizing the punchy color contrast. Components use soft rounding for buttons against typically sharp-edged backgrounds, creating an approachable yet direct aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Amber Blaze | #ff4501 | brand | Dominant brand color for large background sections, headlines, active links, and filled action buttons. It provides a warm, energetic base that covers significant portions of the viewport |
| Arctic Mist | #ffffff | neutral | Default text color on Amber Blaze backgrounds, secondary component backgrounds like buttons, and light borders |
| Vanilla Cream | #ffefe9 | neutral | Primary page background and card surface color, offering a soft, warm neutral canvas for content. This provides a low-contrast readability with dark text while maintaining a warm overall feel |
| Dusty Rose | #ffc2a9 | neutral | Subtle border color for backgrounds, creating visual separation for sections and illustrations that blend into the Vanilla Cream background |
| Obsidian Ink | #000000 | neutral | Primary text color and decorative icon fill, offering maximum contrast against light backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NeueMontreal | Montserrat, system-ui | 100, 400, 700 | 16px, 22px, 26px, 36px, 58px, 80px, 200px | 0.80, 1.00, 1.20, 1.36, 1.40, 1.45 | The primary typeface for all text content, from large, impactful hero headings to body text and navigation. Its clean, geometric sans-serif nature underpins the modern, direct aesthetic. The wide range of weights supports a clear typographic hierarchy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.45 |  |
| subheading | 22 | 1.4 |  |
| heading-sm | 26 | 1.36 |  |
| heading | 36 | 1.2 |  |
| heading-lg | 58 | 1 |  |
| display | 200 | 0.8 |  |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "80px"
  },
  "elementGap": "30-50px",
  "sectionGap": "160px",
  "cardPadding": "40-60px",
  "pageMaxWidth": null
}
```

## Components

### Text Link

**Role:** Standard inline link for navigation and supplementary information.

Uses Amber Blaze (#ff4501) as its text color with no underline. Appears in navigation, footers, and other textual contexts. No explicit hover state provided in data.

### Hero Text Button

**Role:** Purely text-based button variant, often used for secondary actions or navigation within hero sections.

Transparent background, Amber Blaze (#ff4501) text color, no border, no padding. Font is NeueMontreal, sizes vary, weights can be 400 or 700. Radius is 0px.

### Filled Primary Button

**Role:** High-emphasis call to action for key user behaviors.

Background is Amber Blaze (#ff4501), text color is Arctic Mist (#ffffff). Uses a generous 80px border-radius, creating pill-shaped buttons. Padding is 0px top/bottom and 50px left/right. Font is NeueMontreal (weight 400).

### Filled Secondary Button

**Role:** Alternative filled button for actions of lesser prominence, or when Amber Blaze is the background.

Background is Arctic Mist (#ffffff), text color is Amber Blaze (#ff4501). Uses a generous 80px border-radius, creating pill-shaped buttons. Padding is 0px top/bottom and 50px left/right. Font is NeueMontreal (weight 400).

### Avatar Button

**Role:** Circular button for profile images or icons.

Background is Arctic Mist (#ffffff), text color is Amber Blaze (#ff4501). Uses a 50% border-radius for a perfect circle. No explicit padding provided in data.

### Section Divider

**Role:** Visual separator for content sections.

A 5px solid border in Dusty Rose (#ffc2a9) used to delineate content blocks, often horizontally.

## Do's

- Prioritize Amber Blaze (#ff4501) for significant background sections and primary interactive elements to maintain visual energy.
- Use Vanilla Cream (#ffefe9) as the default background color for content sections for optimal readability and a warm base.
- Employ NeueMontreal at its full display sizes (58, 80, 200px) with appropriate line heights (1.0, 0.8) for impactful headlines.
- Apply 80px border-radius to all filled buttons to achieve a consistent pill-shaped aesthetic.
- Maintain spacious layouts: use 160px for section vertical gaps and 72px for horizontal content margins (left/right).
- Use Obsidian Ink (#000000) for all body text and general UI text against Vanilla Cream (#ffefe9) background.

## Don'ts

- Do not introduce additional bold chromatic colors beyond Amber Blaze (#ff4501); rely on its contrast with neutrals.
- Avoid tight spacing: do not use vertical gaps less than 30px between textual elements or less than 50px between sections.
- Do not use subtle variations of orange for text; text links should be Amber Blaze (#ff4501).
- Avoid heavy shadows for elevation; rely on color contrast and subtle borders like Dusty Rose (#ffc2a9) for separation.
- Do not use square buttons; maintain consistency with the 80px border-radius for all primary/secondary actions.

## Layout

The page uses a full-bleed layout, where content sections often extend to the edge of the viewport. The hero section features large, bold typography centered over a background that shifts between high-contrast Amber Blaze and soft Vanilla Cream, often integrating line art. Section rhythm is distinctly separated, often employing large vertical gaps (160px) and sometimes featuring a thin Dusty Rose (#ffc2a9) border. Content arrangement frequently uses centered text blocks or large text elements, occasionally paired with small circular imagery. Navigation is a minimalist top bar with text links.

## Imagery

The visual language for imagery is primarily line-art illustrations in a warm tone, used decoratively. When present, images are often full-width or large blocks, sometimes outlined with a subtle border in Dusty Rose (#ffc2a9). Photography for team members is product-focused, small, circular, and isolated against a vibrant Amber Blaze (#ff4501) background. Icons are monochromatic, using Obsidian Ink (#000000) fill. Imagery serves a decorative and atmospheric role, rather than direct product showcase.

## Similar Brands

| Business | Why |
| --- | --- |
| FriendsOfMakers | Uses a similar warm, limited color palette with bold typography and generous whitespace. |
| Built By Buffalo | Features large, impactful headings, strong color blocking, and a similar clean, direct aesthetic with a focus on web presence. |
| Made by Many | Employs significant use of bold, custom typography against a largely monochromatic background with a single strong accent color. |
| Brave People | Minimalist layout with a strong accent color and large, expressive typography that dictates visual hierarchy. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffefe9
border: #ffc2a9
accent: #ff4501
primary action: #ff4501 (filled action)

Example Component Prompts:

1. Create a Hero Section: Background is Amber Blaze (#ff4501). Headline 'WE ARE FIRST + FOREMOST' in NeueMontreal weight 700, size 200px, Arctic Mist (#ffffff) text, lineHeight 0.8. Subtext 'An international collective offering...' NeueMontreal weight 400, size 22px, Arctic Mist (#ffffff) text, lineHeight 1.4. Centered alignment.

2. Create a Feature Block: Background is Vanilla Cream (#ffefe9). Heading 'We work on socially responsible projects' in NeueMontreal weight 700, size 58px, Amber Blaze (#ff4501) text, lineHeight 1.0. Body text 'Branding and digital are our forte...' in NeueMontreal weight 400, size 16px, Obsidian Ink (#000000) text, lineHeight 1.45. Center align all text. Section padding 160px top/bottom.

3. Create a Team Card: Background is Amber Blaze (#ff4501). Text 'Our team' in NeueMontreal weight 700, size 36px, Arctic Mist (#ffffff) text, lineHeight 1.2. Below, 'Experts in their field...' in NeueMontreal weight 400, size 22px, Arctic Mist (#ffffff) text, lineHeight 1.4. Include a 'More about us' button using Filled Primary Button style (Amber Blaze background, Arctic Mist text, 80px radius, 0px top/bottom, 50px left/right padding).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521223072-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521223072-thumb.jpg |
