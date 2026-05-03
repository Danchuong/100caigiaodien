# Chainzoku — Refero Style

- Refero URL: https://styles.refero.design/style/44287b0a-8709-406d-8ba3-8765ecb19a1f
- Site URL: https://chainzoku.io
- ID: 44287b0a-8709-406d-8ba3-8765ecb19a1f
- Theme: light
- Industry: crypto
- Created: 2026-04-30T01:20:12.872Z
- Ranks: newest: 627, popular: 574, trending: 387

> Neon Cyberpunk Nightscape – A high-contrast world of dark urban realism punctuated by electric neon accents.

## Description

Chainzoku's visual system evokes a dark, gritty cyberpunk aesthetic set against an urban nightscape. It uses stark black and off-white as primary textual and surface colors, punched up by vivid, almost neon, greens and hot pinks for interactive elements and accents. Typography is oversized and angular, featuring a custom variable font with high contrast and tight-tracked display text, giving the brand a distinct, almost aggressive, voice. Surfaces are generally flat and unshadowed, opting for strong borders and high-contrast color shifts to delineate elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, borders, dark backgrounds, decorative fills. Creates stark definition against lighter surfaces |
| Ghost White | #fffff7 | neutral | Primary background, inverse text, active states. Provides a bright, slightly warm canvas for content |
| Deep Shadow | #1c1616 | neutral | Card backgrounds, secondary text on light surfaces. A nuanced dark gray providing subtle depth |
| Faded Concrete | #c4c1c6 | neutral | Footer backgrounds, subtle contextual surfaces. A cool off-white for low-contrast backgrounds |
| Electric Lime | #cdfb52 | accent | Primary interactive elements, navigation active states, accent borders, highlights. A vivid, almost radioactive green that signifies action and attention |
| Sky Blue | #5c97ce | accent | Hero background accents, informational highlights. A moderately saturated blue used for atmospheric background elements |
| Cyber Pink | #f24ac7 | accent | Illustrative accents, decorative fills – creates a high-energy contrast with the primary green |
| Olive Drab | #485229 | accent | Container backgrounds, contextual elements. A muted green providing a grounded, earthy counterpoint |
| Forest Fern | #8c9b57 | accent | Illustrative accents. A moderate green providing visual richness in graphical elements |
| Crimson Glare | #ab0000 | accent | Container backgrounds, accent borders for high visual impact. A vivid red used sparingly for emphasis |
| Lavender Ash | #deafd2 | accent | Subtle container backgrounds, contextual elements. A muted pink providing a soft, atmospheric background |
| Vibrant Magenta | #f756a3 | accent | Illustrative accents. A vivid pink for graphical flair |
| Gradient Sky | #a2b6cf | accent | Background gradient for atmospheric depth |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NeueHaasGrotDisp | Helvetica Neue | 400, 500, 900 | 16px, 18px, 23px, 26px, 40px, 57px, 90px, 100px | 1.00, 1.19, 1.20, 1.39 | Versatile workhorse font for body text, navigation, and many headings. Its slightly condensed forms give a modern, efficient feel, even at lighter weights. The negative letter-spacing maintains a tight, compact readability. |
| Helvetica Neue |  | 400, 700 | 26px, 30px | 0.78 | Used for specific callouts and contextual text where a classic, highly readable sans-serif is needed, often with extremely tight line heights for a stacked, graphic effect. |
| Druk Heavy | Bebas Neue | 400 | 100px, 177px, 301px | 0.80 | Signature display font for large, impactful headlines. Its heavy weight and expansive width, combined with tight letter spacing and line height, create a powerful, almost monumental presence. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.39 |  |
| subheading | 23 | 1.2 |  |
| heading | 40 | 1.19 | -0.8 |
| heading-lg | 57 | 1 | -1.14 |
| display-md | 100 | 0.8 | -2 |
| display-lg | 177 | 0.8 | -3.54 |
| display | 301 | 0.8 | -6.02 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "navigation": "15px"
  },
  "elementGap": "8px",
  "sectionGap": "50px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Link: Dark

**Role:** Primary header navigation and sidebar links.

Text in Ghost White (#fffff7) on a transparent background, no borders or padding; used for primary navigation and sidebar on dark backgrounds. Inherits parent typography.

### Ghost Navigation Link: Light

**Role:** Primary header navigation and sidebar links.

Text in Midnight Ink (#000000) on a transparent background, no borders or padding; used for primary navigation and sidebar on light backgrounds. Inherits parent typography.

### Pill Accent Button

**Role:** Primary calls to action for key interactions.

A circular button with Electric Lime (#cdfb52) background and Midnight Ink (#000000) text. Border radius 9999px. Minimal padding on text. Often used for 'Play' or 'Mint' actions.

### Outline Sidebar Button

**Role:** Interactive elements within the left sidebar navigation.

Transparent background with Ghost White (#fffff7) text and a Ghost White (#fffff7) border. No border radius. Minimum content padding, but the visual separation is created by the border.

### Base Card

**Role:** Structural container for content sections.

Transparent background, 0px border radius, no box shadow, 0px padding. Serves as a flexible, borderless content wrapper.

### Content Card Narrow

**Role:** Containers for specific content blocks with subtle visual separation.

Transparent background, 10px border radius, no box shadow, 0px bottom padding, 0px left/right/top padding for tight content grouping.

### Content Card Dark

**Role:** Containers for specific content blocks requiring a darker background.

Deep Shadow (#1c1616) background, 10px border radius, no box shadow, 0px padding. Used for visually distinct blocks on the page.

### Padded Content Block

**Role:** Sections requiring significant internal padding for content.

Deep Shadow (#1c1616) background, 0px border radius, no box shadow, 50px top/bottom padding, 40px left/right padding. Used for clear content separation.

## Do's

- Use Midnight Ink (#000000) for all primary text on light backgrounds and Ghost White (#fffff7) for primary text on dark backgrounds to maintain high contrast.
- Implement Electric Lime (#cdfb52) as the primary accent color for active states, small interactive elements, and key calls to action like the 'Play' button.
- Apply Druk Heavy for all large display headlines at sizes 100px or larger, using a letterSpacing of -0.0200em and a lineHeight of 0.8em to create a compressed, impactful header.
- Structure primary navigation links using Ghost Navigation Link components, ensuring no background or padding to keep a lightweight, unobtrusive feel.
- Maintain a comfortable density by utilizing an elementGap of 8px for internal spacing between components.
- Round corners of cards and interactive background elements with a 10px border radius, except for header navigation which uses 15px.
- Use 1px borders of either Midnight Ink (#000000) or Ghost White (#fffff7) for subtle separation, particularly in list items or form elements, avoiding overt shadows where possible.

## Don'ts

- Avoid using soft shadows or complex elevation; the design relies on stark color contrast and clear borders for visual hierarchy.
- Do not use generic system fonts for branding headlines; Druk Heavy is crucial for the strong brand voice.
- Refrain from saturating the interface with multiple vibrant colors; reserve vivid hues like Electric Lime (#cdfb52) and Cyber Pink (#f24ac7) for accents and interactive states.
- Do not introduce gradients unless they are the specific 'Gradient Sky' (#a2b6cf) linear gradient, or directly for background atmosphere.
- Do not apply large internal padding to navigation links or simple buttons; they should feel lightweight and text-focused.
- Avoid arbitrary border radii; adhere strictly to 10px for cards and 15px for navigation to maintain visual consistency.

## Layout

The page primarily uses a full-bleed layout, allowing atmospheric illustrations to extend to the viewport edges, especially in the hero and section backgrounds. Content sections below the hero often alternate with strong background visuals. The main branding (Chainzoku logo) and primary navigation are confined to a top bar, with an additional sticky left-hand sidebar for section navigation. Text is frequently presented as centered headlines or in distinct, visually separated blocks, often with a unique, cut-out container shape rather than a standard rectangular box, creating an angular, dynamic rhythm. The site features a mix of two-column layouts juxtaposed with large, immersive single-column visual elements. There's a comfortable density with ample breathing room, ensuring large visuals can dominate.

## Imagery

The site's imagery is characterized by highly stylized, detailed illustrations and concept art, often depicting characters and urban environments. These visuals are typically full-bleed or large contained elements, integrated into the page with masked or irregular edges. The art style is dimensional but not photorealistic, with a strong emphasis on vivid, almost neon, colors against a dark, nocturnal backdrop. Icons are primarily solid or filled, echoing the game-like aesthetic, and serve both decorative and explanatory roles. The imagery is central to content delivery, giving the site a visual-heavy, immersive feel.

## Similar Brands

| Business | Why |
| --- | --- |
| Cyberpunk 2077 game franchise | Shares a night theme with neon accents, oversized and condensed distressed typography, and an overall dark, gritty aesthetic. |
| Akira (manga/film) | Reflects the urban, stylized illustration, and high-contrast visuals of a dystopian future, with a focus on dramatic color pops. |
| Arcane (Netflix series) | Exhibits a similar artistic blend of 2D concept art with dimensional character designs, strong linear elements, and stylized urban environments. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #000000
background: #fffff7
border: #000000
accent: #cdfb52
primary action: #cdfb52 (filled action)

### 3-5 Example Component Prompts
1. Create a Hero section: full-bleed background using Gradient Sky (#a2b6cf) with subtle atmospheric elements. Centered headline 'Chainzoku Saga' in Druk Heavy, size 301px, Midnight Ink (#000000) text, letter-spacing -6.02px, line-height 0.8em. Subtext 'Mint your Zoku. Take a side.' in NeueHaasGrotDisp, size 26px, Midnight Ink (#000000) text, letter-spacing -0.52px, line-height 1.2em.
2. Design a 'Play' Pill Accent Button: Electric Lime (#cdfb52) background, Midnight Ink (#000000) text (NeueHaasGrotDisp, size 16px), 9999px border radius, with minimal padding. Include a small, solid play icon next to the text.
3. Build a 'Clans' Content Card Dark: Deep Shadow (#1c1616) background, 10px border radius, 0px padding. Content includes a subheading 'The Onizoku' from NeueHaasGrotDisp, size 23px, Ghost White (#fffff7) text, and body text in Ghost White (#fffff7) at 16px, line-height 1.39em. Ensure text blocks maintain 8px element spacing.
4. Construct a Sidebar Navigation System: uses Ghost Navigation Link: Dark components in a vertical list. Links should be Ghost White (#fffff7), 16px NeueHaasGrotDisp text. The entire list should sit within a container that uses 'Outline Sidebar Button' styling for interactive elements like 'Zokus', with Ghost White (#fffff7) border and text.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777511987861-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777511987861-thumb.jpg |
