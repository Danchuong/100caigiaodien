# HBO Max — Refero Style

- Refero URL: https://styles.refero.design/style/898f0127-d235-4832-bf33-ab21104f0529
- Site URL: https://www.hbomax.com
- ID: 898f0127-d235-4832-bf33-ab21104f0529
- Theme: dark
- Industry: media
- Created: 2026-04-30T01:03:56.416Z
- Ranks: newest: 635, popular: 715, trending: 536

> Midnight movie theater

## Description

HBO Max presents a cinematic dark mode experience. A deep black canvas provides a dramatic backdrop for content, punctuated by crisp white typography and a vibrant, authoritative blue that guides user actions. Components are minimal, focusing on content with subtle outlines and soft radii. The overall impression is one of sophistication and clarity, optimized for content absorption in a low-light setting.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Abyss | #000000 | neutral | Primary page background, text color for light surfaces, card backgrounds for content display |
| Silver Moonlight | #ffffff | neutral | Primary text color, background for select interactive elements like buttons and cards, essential UI borders |
| Ghostly Gray | #b8b6bb | neutral | Secondary text, muted helper text, inactive icon elements, subtle borders |
| Deep Shadow | #050409 | neutral | Subtle elevated surface backgrounds within the dark theme, such as pricing plan cards |
| Steel Accent | #89868e | neutral | Medium-contrast borders, control outlines, and structural separators. Do not promote it to the primary CTA color |
| Muted Ash | #999999 | neutral | Tertiary text for footnotes and legal disclaimers, subtle borders |
| Action Blue | #3d6a99 | accent | Primary action button backgrounds, interactive elements, significant borders — signals interactivity and confirmation |
| Link Sky | #71b8f2 | accent | Blue text accent for links, tags, and emphasized short phrases. Do not promote it to the primary CTA color |
| Dark Overlay | #0e0a17 | neutral | Subtle border for headings and section dividers, almost indistinguishable from the background but provides structure |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Max Sans | system-ui, sans-serif | 100, 300, 400, 600, 700 | 10px, 12px, 13px, 14px, 16px, 18px, 19px, 20px, 24px, 26px, 28px, 35px, 37px, 44px, 56px | 0.80, 1.00, 1.10, 1.11, 1.20, 1.23, 1.25, 1.35, 1.60, 1.96 | The primary typeface for all text content. Its clean, modern character, especially at lighter weights like 300, contributes to a legible yet sophisticated aesthetic in a dark environment. The generous letter-spacing at smaller sizes ensures readability, while the tighter spacing at larger sizes maintains a polished feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.6 | 0.83 |
| body | 14 | 1.6 | 0.83 |
| subheading | 18 | 1.35 | 0.1 |
| heading | 24 | 1.25 | 0.1 |
| heading-lg | 35 | 1.11 | 0.1 |
| display | 56 | 0.8 | 0.1 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "4.5px",
    "pills": "100px",
    "images": "8px",
    "buttons": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "24px",
  "cardPadding": "",
  "pageMaxWidth": "1140px"
}
```

## Components

### Primary Action Button

**Role:** Filled button for primary calls to action.

Background: Action Blue (#3d6a99). Text: Silver Moonlight (#FFFFFF). Border radius: 8px. Padding: 13px vertical, 24px horizontal. Uses Max Sans 600 at 16px.

### Ghost Action Button

**Role:** Outline button for secondary or tertiary actions, often in areas with dark backgrounds.

Background: transparent. Text: Silver Moonlight (#FFFFFF). Border: 1px solid Silver Moonlight (#FFFFFF). Border radius: 8px. Padding: 10px vertical, 24px horizontal. Uses Max Sans 600 at 16px.

### Text Link Button

**Role:** Minimal interactive element, typically used for navigation or in-line actions within text.

Background: transparent. Text: Silver Moonlight (#FFFFFF). No border or padding beyond text content. Uses Max Sans 600 at 16px.

### White Surface Card

**Role:** Used for content blocks requiring a lighter surface for contrast, such as pricing plans.

Background: Silver Moonlight (#FFFFFF). Border radius: 4.5px. Box shadow: none. Padding: 22.5px vertical, 27px horizontal. Displays dark text.

### Dark Content Card

**Role:** Default card for content presentation, blending into the dark background.

Background: Midnight Abyss (#000000). Border radius: 0px. Box shadow: none. Minimal padding. Displays light text.

### Sign-Up Button (Header)

**Role:** Prominent sign-up call to action in the header.

Background: Silver Moonlight (#FFFFFF). Text: Midnight Abyss (#000000). Border radius: 8px. Padding: 10px vertical, 24px horizontal. Uses Max Sans 600 at 16px.

### Plan Toggle Button

**Role:** Segmented control for switching between monthly/yearly plans.

Background: Midnight Abyss (#000000). Active segment background: Silver Moonlight (#FFFFFF), with Midnight Abyss (#000000) text. Inactive segment text: Ghostly Gray (#b8b6bb). Border radius: 100px. Padding (segments): 10px vertical, 24px horizontal. Uses Max Sans 600 at 16px.

## Do's

- Prioritize Midnight Abyss (#000000) for all main page backgrounds, establishing a deep dark theme.
- Use Silver Moonlight (#FFFFFF) as the primary text color on dark backgrounds for optimal contrast and readability.
- Apply Action Blue (#3d6a99) for all primary interactive elements, including button backgrounds and significant active states.
- Employ Max Sans weight 300 for headlines to create an understated, refined authority, rather than shouting.
- Maintain an 8px border radius for all buttons and content images to ensure a consistent, softly rounded interaction.
- Use Max Sans with 0.083em letter-spacing for body text (10px, 12px) to enhance legibility on dark backgrounds.
- Structure pricing plan cards with a Silver Moonlight (#FFFFFF) background to visually separate them from the dark surroundings, using 4.5px border radius.

## Don'ts

- Avoid using bright, high-saturation colors for large background areas; limit chromatic colors to accents and interactive elements.
- Do not use generic system fonts; always specify Max Sans with its custom weights and letter-spacing for brand consistency.
- Never use dark text on dark backgrounds; ensure sufficient contrast with Silver Moonlight (#FFFFFF) on Midnight Abyss (#000000) or Deep Shadow (#050409).
- Avoid excessive use of outlines or borders on cards; prefer subtle background changes or elevation for visual hierarchy.
- Do not use letter-spacing: normal on smaller font sizes; apply the specified 0.083em for enhanced readability.
- Resist adding strong box shadows; the design relies on flat surfaces and minimal elevation for depth.
- Do not vary border radii arbitrarily; adhere strictly to 8px for buttons/images and 4.5px for cards.

## Layout

The page primarily uses a max-width 1140px centered layout for most content sections, ensuring readability and focus. The hero section is full-bleed, showcasing large-scale content posters as an immersive background for an impactful first impression. Sections often have a consistent vertical rhythm due to a 24px section gap. Content arrangement frequently features centered stacked blocks for headlines and calls to action, particularly in introductory or promotional areas. Pricing plans are presented in a 3-column card grid, which adapts to a single column on smaller viewports. Navigation is a sticky top bar with minimal links and prominent sign-in/sign-up buttons.

## Imagery

The site heavily relies on product imagery in the form of movie and TV show posters. These are treated as full-bleed, almost wallpaper-like backgrounds in the hero section, creating an immersive, cinematic atmosphere. Elsewhere, they appear as contained, slightly rounded (8px radius) thumbnails within dark content cards. The visual style of these images is diverse, reflecting the content, but they are consistently presented against a dark backdrop to keep the UI from competing. Icons are minimal, monochromatic (usually white or light gray) and primarily functional, with an occasional accent blue.

## Similar Brands

| Business | Why |
| --- | --- |
| Netflix | Dark-mode UI with a focus on large content imagery, minimal text, and high-contrast calls to action. |
| Disney+ | Content-driven dark theme, emphasizing poster artwork as visual elements within a structured grid layout. |
| Apple TV+ | Uses a dark background to highlight visual content, with crisp white typography and subtle interactive elements. |
| Peacock | Media streaming service with a dark interface, legible white text, and a distinct primary accent color for actions. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #FFFFFF
- background: #000000
- border: #B8B6BB
- accent: #3D6A99
- primary action: #3d6a99 (filled action)

Example Component Prompts:
- Create a Primary Action Button: #3d6a99 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Create a pricing plan card: White Surface Card with 'Basic with Ads' as headline (Max Sans 19px weight 600, Midnight Abyss #000000). Body text in Midnight Abyss #000000, 14px Max Sans. Include a 'Select Plan' Primary Action Button at the bottom.
- Create a navigation bar: Dark background (#000000). 'Sign In' ghost action button (Silver Moonlight #FFFFFF text), and 'Sign Up Now' button (Silver Moonlight #FFFFFF background, Midnight Abyss #000000 text), both 8px radius. Text in Max Sans 16px weight 600.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777511008371-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777511008371-thumb.jpg |
