# ivee — Refero Style

- Refero URL: https://styles.refero.design/style/b9bc05e4-7778-4f3b-9aa5-55a671d389e3
- Site URL: https://www.iveeapp.com
- ID: b9bc05e4-7778-4f3b-9aa5-55a671d389e3
- Theme: light
- Industry: other
- Created: 2026-04-30T02:14:48.120Z
- Ranks: newest: 409, popular: 773, trending: 552

> Serene blue wellness canvas.

## Description

Ivee conveys a calm and trustworthy atmosphere through a primarily cool blue and white palette, accented by a warm, inviting orange. Typography is a measured blend of traditional serifs for headlines and crisp sans-serifs for functional text, establishing both gravitas and clarity. Components feature generous rounded corners and light elevation, suggesting a friendly yet refined digital experience. The design prioritizes readability and ease of interaction within a clean, spacious layout.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Sky Canvas | #f5f9fd | neutral | Primary page background, setting a light, airy base for the interface |
| Arctic Mist | #ffffff | neutral | Card backgrounds, input fields, elevating content above the Sky Canvas |
| Sand Dune | #faf4e6 | neutral | Subtle background for specific sections or cards, adding warmth without overt color |
| Ocean Deep | #0c4170 | brand | Primary text color for headings and body, providing strong contrast against light backgrounds. Also used for borders, subtle backgrounds for content blocks, and navigation elements, defining structural elements with a cool, clinical blue |
| Azure Glow | #c4e3fa | brand | Light background for cards and hero sections, offering a gentle tint of blue. Also used for inputs and buttons as a secondary background |
| Sunset Orange | #fc6b42 | accent | Call-to-action buttons, active navigation items, and small accent marks – a vivid contrast color to draw attention |
| Pitch Black | #000000 | neutral | Used for button text on light backgrounds and prominent icons |
| Cloud Gray | #ced9e2 | neutral | Subtle borders and dividers, providing visual separation without harsh lines |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Crimson Text | Lora | 400 | 24px, 40px, 52px, 120px | 1.00, 1.17, 1.25 | Distinguished serif for page headlines and key visual statements, imparting a sense of traditional authority and elegance. The light tracking at larger sizes maintains legibility. |
| Roboto | Inter | 400, 500, 700 | 12px, 14px | 1.00, 1.25, 1.43, 1.75, 2.00 | Highly legible sans-serif for body text, navigation, buttons, and form inputs. Its clean lines ensure clarity for functional content and smaller text sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.75 | 0.06 |
| body | 14 | 1.43 | 0.02 |
| heading-sm | 24 | 1.25 | 0.48 |
| heading | 40 | 1.17 | -0.8 |
| heading-lg | 52 | 1.17 | -1.04 |
| display | 120 | 1 | -3 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "40px",
    "images": "20px",
    "inputs": "10px",
    "buttons": "10px",
    "navigation": "5px"
  },
  "elementGap": "20px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call-to-action

Filled button with 'Sunset Orange' background (#fc6b42), 'Arctic Mist' text (#ffffff), and 10px border radius. Padding of 15px top/bottom, 30px left/right. Font is Roboto, typically 700 weight.

### Ghost Navigation Button

**Role:** Secondary action

Transparent background with 'Ocean Deep' text (#0c4170), no border radius. Used for inline links and navigation items. Font is Roboto, usually 400 weight.

### Input Field

**Role:** Data entry

White background (#ffffff), 'Ocean Deep' text and border (#0c4170), 10px border radius. Generous 15px padding on all sides. Placeholder text is 'Ocean Deep'.

### Rounded Feature Card

**Role:** Content container

Background of 'Azure Glow' (#c4e3fa) or 'Sand Dune' (#faf4e6), with very large 40px border radius for a soft, friendly appearance. Contains text and other elements without explicit padding values, suggesting content defines internal spacing.

### Card with Shadow

**Role:** Elevated content container

Background of 'Azure Glow' (#c4e3fa) with a large 40px border radius, featuring a subtle shadow (rgba(0,0,0,0) 0px 0px 30px 0px) for emphasis. No explicit padding.

### Modal Dialog

**Role:** Overlay content

White background (#ffffff) with a 10px border radius, containing text and input fields. Shadow is implied through the context of being an overlay, but no explicit boxShadow token is applied to the modal itself in the component data, relying on context for elevation.

## Do's

- Always use 'Ocean Deep' (#0c4170) for primary text and significant borders to maintain brand consistency and readability.
- Apply 'Sunset Orange' (#fc6b42) exclusively to primary call-to-action elements for maximum impact and to guide user flow.
- Utilize soft 40px border radii for major content cards and larger visual containers to convey a friendly, approachable aesthetic.
- Pair 'Crimson Text' for headlines with 'Roboto' for body copy to establish clear typographic hierarchy and a balanced visual style.
- Maintain comfortable spacing with an element gap of 20px and a section gap of 40px to ensure visual breathability.
- Use 'Arctic Mist' (#ffffff) for inputs and backgrounds that need to stand out against the main 'Sky Canvas' (#f5f9fd).
- Employ 'Azure Glow' (#c4e3fa) for secondary section backgrounds and cards, creating visual interest without straying from the brand's cool palette.

## Don'ts

- Do not introduce sharp corners; avoid radii smaller than 5px for interactive elements.
- Never use 'Sunset Orange' (#fc6b42) for body text or large blocks of content; reserve it for functional accents.
- Avoid overusing shadows; elevation should be subtle and primarily for modals or distinct cards.
- Do not deviate from the 'Crimson Text' and 'Roboto' font families; maintain the established typographic voice.
- Refrain from tight spacing; always provide comfortable padding within elements and ample gaps between sections.
- Do not use dark backgrounds for entire page sections unless specifically for a full-bleed hero that integrates with the 'Ocean Deep' color.
- Avoid arbitrary color choices for text; stick to 'Ocean Deep' for primary text and 'Pitch Black' for button text on light backgrounds.

## Layout

The page primarily uses a max-width contained layout, centering content within a defined boundary. The hero section often features a full-bleed image with text overlaid, immediately setting a tone. Sections alternate between 'Sky Canvas' and 'Azure Glow' backgrounds, creating a clear visual rhythm. Content is arranged in alternating text-left, image-right patterns, and in multi-column card grids for features. Navigation is a sticky top bar, minimalist with primary actions highlighted.

## Imagery

The site uses a mix of lifestyle photography and product visuals. Photography features subjects in a relaxed, comfortable environment, often with a slightly desaturated or cool-toned filter that matches the brand's blues. Product shots are clean and focused, often showing medical devices or IV bags on neutral or blue-tinted backgrounds, emphasizing the health aspect. Icons are simple, outlined, and monochromatic, primarily in 'Ocean Deep', serving explanatory and functional roles rather than decorative.

## Similar Brands

| Business | Why |
| --- | --- |
| Calm | Uses a similar serene blue dominant palette (though lighter) and focuses on mental wellness with a clean, understated UI. |
| Kaiser Permanente | Employs a clear, trustworthy white and blue palette, communicating reliability in a healthcare context, similar to Ivee’s approach. |
| Headspace | Features a light blue background and rounded, friendly components, reflecting a gentle and approachable digital wellness experience. |
| Cigna | Utilizes a clean, corporate blue and white aesthetic in its digital presence, aiming for clarity and professionalism in an insurance/health services context. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #0c4170
- background: #f5f9fd
- border: #0c4170
- accent: #fc6b42
- primary action: #fc6b42 (filled action)

### 3-5 Example Component Prompts
1. Create a Primary Action Button: #fc6b42 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design an Input Field: background #ffffff, border #0c4170, text #0c4170, 10px radius, 15px padding all sides, Roboto font weight 400.
3. Build a Feature Card: background #c4e3fa, 40px radius, with 'Ocean Deep' (#0c4170) text headlines in Crimson Text 40px, and 'Ocean Deep' (#0c4170) body text in Roboto 14px.
4. Compose a Hero Headline: 'Ocean Deep' (#0c4170) text, Crimson Text font weight 400, size 120px, letter-spacing -3px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515265304-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515265304-thumb.jpg |
