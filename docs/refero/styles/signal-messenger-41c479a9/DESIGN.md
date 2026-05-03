# Signal Messenger — Refero Style

- Refero URL: https://styles.refero.design/style/41c479a9-7b41-445b-9ea7-c7a6331828f0
- Site URL: https://signal.org
- ID: 41c479a9-7b41-445b-9ea7-c7a6331828f0
- Theme: light
- Industry: other
- Created: 2026-02-27T11:31:08.000Z
- Ranks: newest: 1118, popular: 486, trending: 976

> open sky, clear communication

## Description

This design system projects an image of digital security and approachability, achieved through a bright, spacious layout with rounded elements. The intentional use of soft blue and white as primary background colors creates an open, trustworthy atmosphere, while dark typography ensures readability. The system strikes a balance between solid, clear interactive elements and subtle background variation, making complex privacy concepts feel accessible.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Cloud Cover | #ffffff | neutral | Page backgrounds, card surfaces, primary button backgrounds — provides a crisp, bright canvas. |
| Sky Dust | #f6f6f6 | neutral | Subtle section dividers, slight background variation to break visual monotony. |
| Stone Whisper | #e9e9e9 | neutral | Subtle borders and dividers, providing separation without harsh lines. |
| Signal Blue | #9dbbf8 | brand | Hero section background, conveying a sense of calm and clarity. |
| Ocean Deep | #2c6bed | accent | Primary Call-to-Action button text and borders, links — a vibrant, trustworthy blue indicating action. |
| Night Sky | #1b1b1b | neutral | Primary text, headings, and key UI elements ensuring high contrast and legibility. |
| Deep Space | #404654 | neutral | Secondary text, subtle accents, creating depth in informational sections. |
| Slate Shadow | #3c3744 | neutral | Footer background, providing a grounding anchor to the page. |
| Link Blue | #2942ff | accent | Navigation links and secondary interactive elements, differentiating them from primary CTAs. |
| Subtle Mist | #a5cad5 | neutral | Decorative background fills on feature blocks, maintaining a light, airy feel. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 600, 800 | 16px, 20px, 28px, 40px, 60px | 1.07, 1.10, 1.14, 1.38, 1.40, 1.50 | Primary typeface for all textual content, from navigation to display headings. Inter's clean, humanist grotesque design supports clarity and readability across various sizes, reinforcing the message of clear communication. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.5 |  |
| subheading | 20 | 1.4 |  |
| heading | 28 | 1.14 |  |
| heading-lg | 40 | 1.1 |  |
| display | 60 | 1.07 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "images": "16px",
    "buttons": "8px"
  },
  "elementGap": "12px",
  "sectionGap": "64px",
  "cardPadding": "30px",
  "pageMaxWidth": "1344px"
}
```

## Components

### Get Signal CTA Button Group



### Share Without Insecurity Feature Block



### Donate to Signal Card



### Primary Call-to-Action Button

**Role:** Primary interactive element for key actions

White background, Ocean Deep (#2c6bed) text and 1px border. Height is text-based with 0px vertical padding, 20px horizontal padding. Border radius 8px. Text is Inter 400 at 16px, line-height 1.50.

### Navigation Link Button

**Role:** Secondary action in header navigation

Transparent background, Night Sky (#1b1b1b) text. 1px Night Sky (#1b1b1b) border. Height is text-based with 8px vertical padding, 12px horizontal padding. No border radius. Text is Inter 400 at 16px, line-height 1.50.

### Navigation Item Link

**Role:** Standard navigation link

Night Sky (#1b1b1b) text (Inter 400, 16px). Uses a secondary accent color, Link Blue (#2942ff), on hover and active states.

### Product Screenshot Wrapper

**Role:** Encapsulates product visuals

Wraps product screenshots with a 16px border radius. Shadows applied: rgba(0, 0, 0, 0.12) 0px 4px 12px 0px, rgba(0, 0, 0, 0.08) 0px 0px 2px 0px to provide subtle elevation.

## Do's

- Use Night Sky (#1b1b1b) for all primary headings and body text to ensure maximum readability against light backgrounds.
- Apply Signal Blue (#9dbbf8) as a primary background accent for hero sections to immediately establish brand identity.
- Utilize 8px border-radius for all primary buttons to maintain a soft, approachable aesthetic.
- Maintain a clear page structure with sections separated by at least 64px, alternating backgrounds where appropriate (Cloud Cover #ffffff, Sky Dust #f6f6f6, or Signal Blue #9dbbf8).
- Ensure all interactive elements, such as buttons and links, use Ocean Deep (#2c6bed) or Link Blue (#2942ff) to signify action and interaction clearly.
- Use Inter font family exclusively for all text elements, leveraging weights 400 for body, 600 for subheadings, and 800 for major headings and display titles.

## Don'ts

- Avoid using highly saturated, non-brand colors; stick to the established palette of blues, grays, and whites.
- Do not deviate from the 8px and 16px border radii; squared or overly complex rounded shapes are not part of this system.
- Never use dark backgrounds for large text blocks except in the footer where Slate Shadow (#3c3744) is established, always prioritize high contrast with light backgrounds.
- Do not introduce complex gradients or texture overlays on backgrounds; maintain a flat, clean aesthetic.
- Avoid excessive use of shadows; reserve the specific shadow token rgba(0, 0, 0, 0.12) 0px 4px 12px 0px, rgba(0, 0, 0, 0.08) 0px 0px 2px 0px only for elevated elements like product mocks.

## Layout

The site uses a max-width 1344px centered container for most content, with a full-bleed hero section employing Signal Blue (#9dbbf8) background. Sections generally alternate between clean white backgrounds (Cloud Cover #ffffff) and very subtle gray backgrounds (Sky Dust #f6f6f6) or brand-colored fills (Signal Blue #9dbbf8, Subtle Mist #a5cad5), creating a gentle visual rhythm. Content is often arranged in a split layout, with text on one side and a visual (product screenshot or illustration) on the other. Navigation is a sticky top bar with clearly delineated links and buttons. Vertical spacing between main sections is generous, around 64px, contributing to a spacious feel.

## Imagery

Imagery primarily consists of product screenshots of the Signal app on mobile devices, treated with subtle shadows indicating elevation. These are typically contained within the main layout. Illustrations are abstract and geometric, using brand colors and outlines to convey concepts like global communication and security without being overly literal. Icons are outlined, simple, and monochrome, complementing the clean UI. The visual emphasis is on functionality and clarity, using images to explain product features rather than for decorative atmosphere.

## Elevation

| Element | Style |
| --- | --- |
| Product Screenshot Wrapper | rgba(0, 0, 0, 0.12) 0px 4px 12px 0px, rgba(0, 0, 0, 0.08) 0px 0px 2px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| ProtonMail | Both prioritize privacy and convey trust through clean, clear light-themed interfaces with blue accents and direct typography. |
| DuckDuckGo | Similar focus on user privacy and a commitment to a light, uncluttered UI with a distinct blue brand color for interaction. |
| Telegram | Messaging app promoting security, using a light theme with prominent blue interactions and clean, legible typography. |
| Wire | Another secure messaging platform, employs a crisp, functional design with emphasis on interaction clarity and a subdued color palette. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #1b1b1b (Night Sky)
- Background: #ffffff (Cloud Cover)
- CTA Button: #2c6bed (Ocean Deep)
- Border: #e9e9e9 (Stone Whisper)
- Accent Background: #9dbbf8 (Signal Blue)
- Footer Background: #3c3744 (Slate Shadow)

### 3-5 Example Component Prompts
1.  **Create a Hero Section:** Background Signal Blue (#9dbbf8). Centered headline 'Speak Freely' using Inter 800 at 60px, line-height 1.07, color #1b1b1b. Subtext 'Say hello...' using Inter 400 at 20px, line-height 1.40, color #1b1b1b. Include a primary CTA button: background white, text Ocean Deep (#2c6bed), 1px Ocean Deep (#2c6bed) border, 8px radius, 0px vertical padding, 20px horizontal padding, Inter 400 at 16px.
2.  **Generate a Feature Block:** Background Cloud Cover (#ffffff). Heading `Share Without Insecurity` using Inter 800 at 40px, line-height 1.10, color #1b1b1b. Body text `State-of-the-art...` using Inter 400 at 16px, line-height 1.50, color #1b1b1b. A decorative block with Subtle Mist (#a5cad5) background and 16px border-radius, right-aligned.
3.  **Design a Footer:** Background Slate Shadow (#3c3744). Text (links and copyright) primarily using Inter 400 at 16px, line-height 1.50, color #e9e9e9. Columns should have an element gap of 12px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775926035480-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775926035480-thumb.jpg |
