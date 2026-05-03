# Splice — Refero Style

- Refero URL: https://styles.refero.design/style/1f69df96-675d-4ee0-aa85-e085d9d39981
- Site URL: https://splice.com
- ID: 1f69df96-675d-4ee0-aa85-e085d9d39981
- Theme: dark
- Industry: media
- Created: 2026-02-24T14:22:25.000Z
- Ranks: newest: 1136, popular: 386, trending: 748

> Digital Studio, Cobalt Glow. A dark, immersive interface with bursts of vivid, digital-native color.

## Description

Splice embodies a 'dark-mode-first' approach, creating an immersive, studio-like atmosphere where dark surfaces highlight bright, focused interactive elements. A cool blue (#1253ff) dominates as the primary accent, reminiscent of digital waveforms or audio interfaces, providing a consistent visual anchor. Subtle use of other vivid colors (like yellow, green, red, vibrant blue, and violet) mainly in illustrative elements or specific product highlights prevents visual monotony while maintaining the core dark aesthetic. The interplay of highly rounded buttons and sharper graphic elements creates a contrast that feels modern and dynamic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #121214 | neutral | Primary surface background, text on light elements, input text in dark mode. |
| Deep Space | #000000 | neutral | Nav bars, section backgrounds, deep contrast areas. Provides absolute black for maximum impact against lighter text. |
| Ghost Gray | #09090a | neutral | Subtle background for UI elements, offers slight contrast from pure black. |
| Cloudburst | #232426 | neutral | Secondary button background in dark mode, provides a slightly lighter dark tone. |
| Arctic Mist | #ffffff | neutral | Primary text on dark backgrounds, icons, button text. Maximizes readability and brightness. |
| Storm Cloud | #a6a8ad | neutral | Secondary text, subtle borders, inactive elements, navigation links. A softer contrast against dark backgrounds. |
| Pewter | #c8c9cc | neutral | Tertiary text, borders for inactive elements. Lighter than Storm Cloud for less emphasis. |
| Slate Border | #63656d | neutral | Button borders, subtle dividers. Provides a distinct yet soft separation. |
| Cobalt Blue | #1253ff | brand | Primary Call to Action buttons, active navigation indicators. This is the core interactive color. |
| Active Link Blue | #528fff | brand | Links, interactive hover states, sometimes used in illustrations. A slightly lighter, more vibrant blue than Cobalt Blue. |
| Goldenrod | #f4d04 | accent | Illustrative accents, highlights on product images. Adds a vibrant, energetic pop. |
| Electric Lime | #7cf727 | accent | Illustrative accents, specific product features. A sharp, digital green. |
| Neon Magenta | #ff8aa6 | accent | Illustrative accents, secondary highlight elements. A playful and distinct accent. |
| Skyfall Blue | #62daff | accent | Illustrative accents, product badges. A cooler, brighter blue accent. |
| Ametrine | #b874ff | accent | Illustrative accents, unique product branding. A rich purple accent. |
| Vivid Green | #f1f607 | semantic | Featured text, alert accents. A highly saturated green for emphasis. |
| Deep Cadet | #0029cc | semantic | Emphasis text, often on contrasting backgrounds for strong brand presence. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| InterVariable | Inter | 400, 500, 600, 700 | 12px, 13px, 14px, 16px, 18px, 20px, 26px | 1.20, 1.25, 1.43, 1.50 | Dominant text font for body copy, links, navigation, buttons, and most UI elements. Its variable nature allows for precise weight control across sizes, ensuring readability within the dark theme. |
| SoehneBreit | Arial Black | 400 | 14px, 28px, 36px, 48px, 54px | 1.25, 1.43 | Used for prominent headings and titles, specifically at larger sizes. The wider tracking on this display font creates an open, impactful feel, asserting authority without relying on heavy weights. |
| Soehne | Arial | 400 | 20px | 1.25 | Used for select subheadings. Provides a more understated headline presence than SoehneBreit, balancing visual hierarchy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body | 14 | 1.5 | -0.015 |
| body-lg | 16 | 1.5 |  |
| subheading | 18 | 1.25 |  |
| heading | 20 | 1.25 | -0.015 |
| heading-lg | 26 | 1.2 |  |
| display-sm | 28 | 1.25 | 0.071 |
| display-md | 36 | 1.25 | 0.071 |
| display | 48 | 1.25 | 0.071 |
| display-lg | 54 | 1.25 | 0.071 |

## Spacing & Shape

```json
{
  "radius": {
    "nav": "1440px",
    "buttons": "60px",
    "default": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Announcement Banner



### Primary CTA Button Group



### Pricing Plan Card



### Primary Call to Action Button

**Role:** Core user interaction

Background: Cobalt Blue (#1253ff), Text: Arctic Mist (#ffffff). Border: none. Radius: 60px. Padding: 13.5px vertical, 32px horizontal. Prominent and inviting.

### Secondary Ghost Button

**Role:** Secondary action or subtle navigation

Background: rgba(0, 0, 0, 0) (transparent), Text: Arctic Mist (#ffffff). Border: Arctic Mist (#ffffff). Radius: 0px. Padding: 0px. Used for subtle text-based actions or links.

### Dark Icon Button

**Role:** Minimalist interactive element, often for playback controls or less prominent actions.

Background: Cloudburst (#232426), Text: Arctic Mist (#ffffff). Border: Slate Border (#63656d). Radius: 50% (circular). Padding: 7.5px vertical, 20px horizontal. Its circular shape and dark background make it distinct yet non-intrusive.

### Text Link (Dark Background)

**Role:** Inline navigation or reference

Background: transparent. Text: Active Link Blue (#528fff) and Arctic Mist (#ffffff). No border or radius. Used for text links on dark backgrounds.

### Text Link (Light Background)

**Role:** Inline navigation or reference on light surfaces

Background: transparent. Text: Midnight Ink (#121214). No border or radius. Used for text links on light backgrounds, appearing sparingly elsewhere.

### Header Navigation Item

**Role:** Primary site navigation

Background: transparent. Text: Storm Cloud (#a6a8ad) by default, Arctic Mist (#ffffff) on hover/active. Font: InterVariable, weight 400. Letter spacing -0.015em. No explicit padding, defined by parent spacing. Radius: 1440px for a pill-like appearance.

### Primary Headline

**Role:** Main page titles and major section headings

Font: SoehneBreit, weight 400. Sizes: 54px, 48px. Line height 1.25. Letter spacing 0.071em. Text: Arctic Mist (#ffffff). Designed for high impact and readability against dark backdrops, using generous letter spacing for openness.

### Input Field (Dark)

**Role:** Data entry in dark sections

Background: transparent. Text: Midnight Ink (#121214). Border: Midnight Ink (#121214). Radius: 0px. Typically used in sections with lighter backgrounds.

### Input Field (Light)

**Role:** Data entry in light sections

Background: transparent. Text: Arctic Mist (#ffffff). Border: Arctic Mist (#ffffff). Radius: 0px. Used for inputs against dark backgrounds ensuring visibility.

## Do's

- Prioritize Midnight Ink (#121214) and Deep Space (#000000) for backgrounds, creating a consistent dark canvas.
- Use Cobalt Blue (#1253ff) exclusively for primary call-to-action buttons, ensuring high visibility and user guidance.
- Apply a 60px border-radius to all primary interactive buttons, distinguishing them with a distinct pill shape.
- Utilize InterVariable for all body text and UI elements at weights 400-700, ensuring consistent typography for readability.
- Employ SoehneBreit weight 400 with 0.071em letter-spacing for all significant headings (28px minimum) to maintain the brand's impactful, open typographic style.
- Maintain a base unit of 8px for element spacing and 48px for section gaps to ensure comfortable density and visual rhythm.
- Use Arctic Mist (#ffffff) for all primary text on dark backgrounds to ensure optimal contrast and readability.

## Don'ts

- Avoid using bright colors for large background areas; reserve them for accents, illustrations, or small interactive elements.
- Do not use generic square buttons; all primary interactive buttons must have a 60px radius (pill shape).
- Do not apply shadows for primary elevation; the design relies on changes in background color and imagery for depth.
- Avoid mixed-mode layouts on a single page; maintain the dark theme consistently throughout.
- Do not use letter-spacing outside of specified values for InterVariable (-0.015em) and SoehneBreit (0.071em) to preserve the intended typographic feel.
- Do not use border-radius less than 8px unless explicitly for imagery (4px) or specified components (e.g., 0px for some inputs).
- Avoid low-contrast text combinations; ensure all text is Arctic Mist (#ffffff) or Storm Cloud (#a6a8ad) on dark backgrounds, or Midnight Ink (#121214) on light backgrounds.

## Layout

The site uses a full-bleed layout for its hero section, featuring a centered headline over a dark, atmospheric image. Subsequent sections maintain this dark theme, with content primarily wrapped within a conceptual max-width, though not strictly constrained by explicit pageMaxWidth. Sections often alternate between full-width elements and implicitly centered content blocks. There is a consistent use of vertical spacing, although explicit section dividers are absent, relying on shifts in background imagery or subtle color changes. Content arrangement varies, from stacked centered elements within the hero to potential multi-column layouts anticipated in internal sections. The navigation is a sticky top bar, minimal and dark, providing consistent access to primary sections.

## Imagery

This design primarily utilizes photography with a distinct green color cast or digital manipulation, creating an artificial, atmospheric mood rather than realistic product shots. Imagery is often full-bleed in hero sections, serving as a background for textual content, and typically blurred or desaturated to give prominence to UI elements. Small, illustrative abstract graphics—like the waveform—are used decoratively to reinforce the audio theme. Icons are monochromatic, often Arctic Mist (#ffffff), with a thin stroke or flat fill, used functionally within navigation and interactive elements. The overall density is balanced, with large atmospheric images providing visual interest behind primary headlines and text.

## Similar Brands

| Business | Why |
| --- | --- |
| Native Instruments | Dark-themed UI for music production tools, featuring similar use of vivid accents against a deep background. |
| Ableton | Focus on functional, dark interface for creative audio software, with clear interactive elements. |
| Arturia | Digital musician tools with a high contrast, often dark aesthetic and impactful typography. |
| SoundCloud Go+ | Audio streaming platforms that gravitate towards dark themes with bright, focused interactive elements. |
| Serum by Xfer Records | UI for VST synthesizers, characterized by dark panels and bright, digital-style controls and waveforms. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- Text (primary): #ffffff (Arctic Mist)
- Background (primary): #121214 (Midnight Ink)
- CTA Button: #1253ff (Cobalt Blue)
- Border (subtle): #63656d (Slate Border)
- Accent (link/hover): #528fff (Active Link Blue)

**Example Component Prompts:**
1. Create a `Primary Call to Action Button` with text 'Start Free Trial'.
2. Create a `Header Navigation Item` with text 'Sounds'. Use Arctic Mist as active state and Storm Cloud for inactive.
3. Create a section headline using `SoehneBreit` 400, size 48px, letter-spacing 0.071em, text Arctic Mist, that reads 'Discover Your Next Sound'.
4. Generate a `Dark Icon Button` for a play control, with an icon. Ensure the button has Cloudburst background, Arctic Mist text/icon, Slate Border, and 50% border-radius. The icon should be a simple play arrow (a right-facing triangle).
5. Design a text input field for a dark background section, with placeholder text 'Search samples'. It should have a transparent background, Arctic Mist text and border, and 0px border-radius, using `InterVariable` 400 at 16px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924803278-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924803278-thumb.jpg |
