# Ada — Refero Style

- Refero URL: https://styles.refero.design/style/30ebf167-9ad1-4b20-853c-2726f473f4c4
- Site URL: https://www.ada.cx
- ID: 30ebf167-9ad1-4b20-853c-2726f473f4c4
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:34:39.430Z
- Ranks: newest: 759, popular: 1175, trending: 1141

> Contrast-driven document

## Description

The Ada design system establishes a stark, information-first aesthetic built on high contrast and minimal ornamentation. Typography anchors the visual hierarchy, with a clear distinction between prominent headings and concise body text. Surfaces are flat and monochromatic, emphasizing content over decorative elements. Interaction is signaled through bold black borders and subtle background shifts, ensuring focus remains on actionable items.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ghost Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #FFFFFF | neutral | Page background, surface background for all content blocks. The primary color base for the entire system providing a clean, bright foundation |
| Fog Button | #efefef | neutral | Background for secondary or ghost buttons, indicating an interactive but low-emphasis element |
| Subtle Link Blue | #0000ee | neutral | Default browser link color, appears as informative text links |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times | serif | 400, 700 | 16px, 19px, 24px, 32px | 1.20 | Core content font for headings, body text, links, and navigation. Its serifs lend a classic, authoritative feel, reinforcing the informative and research-heavy nature of the content. Headlines often use bolder weights to establish hierarchy, while body text maintains readability with the 400 weight. Used for most of the prominent text, including the brand name. |
| Arial | sans-serif | 400 | 13px | 1.20 | Supportive text for buttons, navigation sub-items, and small informational text. Its sans-serif nature provides a utilitarian contrast to the Times serif font, used for functional elements where clarity and conciseness are prioritized. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.2 | 0 |
| subheading | 19 | 1.2 | 0 |
| heading | 24 | 1.2 | 0 |
| display | 32 | 1.2 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "16px",
  "sectionGap": "40px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive element for secondary actions.

Background: Fog Button (#efefef), Text: Ghost Ink (#000000), Border: 1px Ghost Ink (#000000) on all sides, Padding: 1px top/bottom, 6px left/right. Radius: 0px.

### Navigation Link

**Role:** Primary navigation items.

Text: Ghost Ink (#000000), Font: Times 16px, Line Height: 1.20. No padding or background by default, relies on text contrast. Links are underlined by default (browser behavior), this is not a custom style.

### Information Card (Unstyled)

**Role:** General content container for text and images.

Background: Transparent (rgba(0, 0, 0, 0)), Border: None, Box Shadow: None, Padding: 0px, Radius: 0px. Acts as a simple wrapper for content without imposing visual style.

## Do's

- Prioritize Times (serif) for all headings and primary body text to establish an authoritative tone.
- Use Arial (sans-serif) only for functional elements like buttons or small navigational text, ensuring clear distinction from content.
- Maintain high contrast throughout the interface, primarily using Ghost Ink (#000000) on Canvas White (#FFFFFF) backgrounds.
- Apply Fog Button (#efefef) as the background for any button intended to be visually subtle but interactive.
- Ensure all interactive elements, where visible borders are present, such as ghost buttons, use a 1px Ghost Ink (#000000) border.
- Adhere to 0px border-radius for all component corners, reinforcing a sharp, precise aesthetic.
- Utilize 16px as the standard vertical element separation, with larger 40px gaps for section breaks.

## Don'ts

- Avoid using any colors other than Ghost Ink (#000000), Canvas White (#FFFFFF), Fog Button (#efefef), and the browser default blue link color in the UI.
- Do not introduce rounded corners or box shadows, as the system relies on flat surfaces and sharp edges.
- Do not deviate from the specified font families or their assigned roles; Times is for content, Arial for controls.
- Avoid decorative gradients or background images that detract from the content-first focus.
- Do not use padding on cards; they should act as invisible containers using the default 0px padding.
- Do not apply custom styling to links; allow the browser default underlined blue to indicate interactivity.
- Never use less than 16px vertical element spacing, except for specific button padding.

## Layout

The page exhibits a full-bleed layout, maximizing screen width for content delivery. The hero section features a prominent, centered headline over a dark background. Content sections follow in a vertical stack, utilizing consistent vertical spacing. While the layout often features a single column for primary content, some areas suggest implicit two-column arrangements for text and visual pairings. Navigation primarily appears as a static top bar with interactive dropdowns, and occasional nested lists for sub-navigation. The overall density is comfortable, with ample breathing room between content blocks, but the information itself is presented concisely.

## Imagery

The site predominantly uses abstract, textural imagery with a muted, often blurred aesthetic, serving as atmospheric backdrops rather than explicit content. Product screenshots are minimal. Icons are monochrome, often using Ghost Ink outlines, maintaining the stark, high-contrast feel. Imagery density is low, with visuals primarily serving as decorative accents or visual breaks rather than key information carriers.

## Similar Brands

| Business | Why |
| --- | --- |
| OpenAI | Shares a high-contrast, text-dominant interface with minimal graphic elements and a focus on serious, functional typography. |
| Notion | Emphasizes a crisp, utility-first UI with extensive use of black text on white backgrounds and a clear hierarchy through font sizes and weights. |
| Substack | Features a strong emphasis on readability with classic serif typography for content, paired with minimalist UI elements. |
| Linear | Utilizes stark UI with high contrast, precise typography, and a lack of decorative flourish to convey efficiency and focus. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #FFFFFF
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a ghost button: background #efefef, text Ghost Ink (#000000), 1px Ghost Ink (#000000) border, 0px radius, 1px vertical padding, 6px horizontal padding, using Arial 13px.
2. Design a primary content section: Canvas White (#FFFFFF) background, with a main heading using Times 32px Ghost Ink (#000000) and body text using Times 16px Ghost Ink (#000000), with 40px vertical spacing between sections.
3. Create a navigation link: Text Ghost Ink (#000000), Font Times 16px, Line Height 1.20, no background or border, using 16px element gaps for spacing.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509256656-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509256656-thumb.jpg |
