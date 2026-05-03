# WOUQ — Refero Style

- Refero URL: https://styles.refero.design/style/4fc87190-9783-4a85-bdc1-35800a2ec690
- Site URL: https://wearewouq.com
- ID: 4fc87190-9783-4a85-bdc1-35800a2ec690
- Theme: light
- Industry: agency
- Created: 2026-04-30T01:59:05.558Z
- Ranks: newest: 473, popular: 1236, trending: 1188

> monochromatic gallery, etched edges

## Description

WOUQ employs a minimalist light theme with high contrast typography and ample whitespace. The design emphasizes content through a stark juxtaposition of black text on white backgrounds, occasionally softened by subtle light gray interactive states. Custom typography lends a distinctive character, maintaining readability while providing visual interest, particularly in navigation and large text blocks. Components are border-defined and largely achromatic, allowing content and occasional imagery to provide color and visual depth.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Open Sans | Open Sans | 400 | 18px, 22px | 1.00, 1.67 | Body text and general content, ensuring readability with its balanced forms. Despite its commonality, it is used here to create a neutral, unobtrusive tone. |
| ESAllianz-Light | Inter Light | 400 | 18px, 27px, 45px | 1.00, 1.11, 1.50 | Large headings, navigational elements, and certain interactive text. Its light weight at larger sizes creates an airy, sophisticated presence, avoiding visual heaviness. |
| ESAllianz-Regular | Inter | 400 | 18px, 45px | 1.11, 1.50 | Standard headings and body text, providing a slightly more grounded feel than its Light counterpart while maintaining the distinct brand character. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 18 | 1.67 |  |
| subheading | 22 | 1 |  |
| heading | 27 | 1 |  |
| display | 45 | 1.11 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "buttons": "10px",
    "elements": "10px"
  },
  "elementGap": "5px",
  "sectionGap": "75px",
  "cardPadding": "25-30px",
  "pageMaxWidth": "1460px"
}
```

## Components

### Navigation Link

**Role:** Interactive navigation items in the header

Text is Midnight Ink (#000000) using ESAllianz-Light at 18px. Underlines appear on hover/active states with a 1px Midnight Ink border. Padding of 25px around text content.

### Hero Headline

**Role:** Primary heading for the initial screen

Midnight Ink (#000000) ESAllianz-Light, 45px, lineHeight 1.11. Uses ample top padding creating space.

### Project Card

**Role:** Clickable cards displaying project previews

White background, Midnight Ink (#000000) text (ESAllianz-Light 45px or ESAllianz-Regular 18px). Has a 10px border-radius and appears to have border color changes or subtle interaction effects.

## Do's

- Use Canvas White (#ffffff) as the primary background color for all main sections and components.
- Employ Midnight Ink (#000000) for all primary text, headings, and interactive elements to maintain high contrast and clarity.
- Apply ESAllianz-Light at 45px with a 1.11 lineHeight for all major headlines to convey an airy, sophisticated tone.
- Implement a 10px border-radius consistently for all card-like elements and interactive components.
- Maintain generous vertical spacing between sections (75px) to support the spacious feel of the design.

## Don'ts

- Avoid introducing additional chromatic colors; the palette is strictly monochrome.
- Do not use heavy shadows or gradients; flat surfaces and subtle borders define elevation.
- Never deviate from the specified Open Sans or ESAllianz font families for any UI text.
- Do not overcrowd content; utilize the 1460px max-width and generous padding (25-30px) to ensure ample whitespace.
- Avoid bold or ultra-heavy font weights; the design relies on lighter weights for its distinctive character.

## Layout

The page adheres to a max-width of 1460px, centrally aligned. The hero section prominently features a large headline centered over a full-width abstract image. Subsequent sections arrange content in a grid-like fashion, showcasing projects with prominent image blocks and accompanying titles. There is a consistent vertical rhythm with significant spacing (75px) between sections, creating a spacious and unhurried browsing experience. Navigation is a minimal top bar, sticky or otherwise. Project links appear in a multi-column grid, often two or three columns wide, without visual dividers between projects.

## Imagery

This design utilizes a mix of abstract and product-focused photography and high-quality product renders. Imagery is typically contained within rectangular frames, sometimes with subtle rounded corners (10px). Photography leans towards high-key or product-focused shots, often with a clean, de-saturated aesthetic allowing product forms and textures to be the focal point. Icons are minimal, likely outlined, and monochromatic, used sparingly for navigation or functional cues. The density is moderate to high, with large images being central to project showcases.

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards-winning portfolio sites | Monochromatic palette, large typography, and focus on high-quality visual content display. |
| Basic Agency | Similar high-contrast black-on-white aesthetic with custom typography and spacious layouts. |
| Koto | Reliance on specific, often light-weight, sans-serif typefaces for brand identity and minimalist UI. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #000000
primary action: no distinct CTA color

Example Component Prompts:
1. Create a navigation item: ESAllianz-Light, 18px, #000000 text, 25px padding-x, 1px #000000 border on hover.
2. Create a hero text block: ESAllianz-Light, 45px, #000000 text, lineHeight 1.11.
3. Create a project preview card: Background #ffffff, border-radius 10px. Project title: ESAllianz-Regular, 18px, #000000. Display a smaller descriptive text using Open Sans, 18px, #000000.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514318968-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514318968-thumb.jpg |
